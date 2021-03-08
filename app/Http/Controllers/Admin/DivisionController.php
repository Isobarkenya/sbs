<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DestroyTagRequest;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Division;
use App\Services\TagFormFields;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Division::all();

        return view('admin.division.index',compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = TagFormFields::formData();

        return view('admin.division.create', $data);
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug'=>'required',
            'active'=>'required'
        ]
    );

    if ($validator->fails()) {
        $response=array('status'=>'error','errors'=>implode(',', $validator->errors()->all()));
        // return response()->json($response, 400);
        return redirect('/admin/createdivision')
                ->withError(trans('Fill all fields to continue'));
    }else{
        $division = new Division();
        $division->name = $request->name;
        $division->slug = $request->slug;
        $division->active = $request->active;

        $division->save();

        return redirect('/admin/division')
                ->withSuccess(trans('Division Created  Successfully', ['Division' => $division->division]));
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $data = TagFormFields::formData($tag);

        return view('admin.tag.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateTagRequest $request
     * @param int                                 $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $fields = TagFormFields::fields();

        foreach (array_keys($fields) as $field) {
            $tag->$field = $request->get($field);
        }

        $tag->save();

        return redirect("/admin/tags/$id/edit")
                    ->withSuccess(trans('messages.success.tag-updated', ['tag' => $tag->tag]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Http\Requests\DestroyTagRequest $request
     * @param int                                  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyTagRequest $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->posts()->detach();
        $tag->delete();

        return redirect()
            ->route('showtags')
            ->withSuccess(trans('messages.success.tag-deleted', ['tag' => $tag->tag]));
    }
}
