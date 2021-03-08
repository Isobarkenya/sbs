<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Band;
use App\Services\TagFormFields;
use Illuminate\Http\Request;

class BandController extends Controller
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
        $bands = Band::all();

        return view('admin.band.index',compact('bands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = TagFormFields::formData();

        return view('admin.band.create', $data);
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
        return redirect('/admin/createband')
                ->withError(trans('Fill all fields to continue'));
    }else{
        $band = new Band();
        $band->name = $request->name;
        $band->slug = $request->slug;
        $band->active = $request->active;

        $band->save();

        return redirect('/admin/band')
                ->withSuccess(trans('Band Created  Successfully', ['Band' => $band->band]));
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

    public function update(Request $request, $id)
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
        return redirect("/admin/skill/$id/edit")
                ->withError(trans('Fill all fields to continue'));
    }else{
        $skill = Skill::findOrFail($id);
        $skill->name =  $request->name;
        $skill->slug =  $request->slug;
        $skill->active =  $request->active;

        $skill->save();

        return redirect("/admin/skill/$id/edit")
                    ->withSuccess(trans('messages.success.tag-updated', ['skill' => $skill->skill]));

      }
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
