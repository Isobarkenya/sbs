<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DestroyTagRequest;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Dashboarddata;
use App\Services\TagFormFields;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
        $dashboarddata = Dashboarddata::all();

        return view('admin.pages.dashboard',compact('dashboarddata'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = TagFormFields::formData();

        return view('admin.skill.create', $data);
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
        return redirect('/admin/createskill')
                ->withError(trans('Fill all fields to continue'));
    }else{
        $skill = new Skill();
        $skill->name = $request->name;
        $skill->slug = $request->slug;
        $skill->active = $request->active;

        $skill->save();

        return redirect('/admin/skill')
                ->withSuccess(trans('Skill Created  Successfully', ['Band' => $skill->skill]));
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
        $skill = Skill::findOrFail($id);


        return view('admin.skill.edit', compact('skill'));
    }


    public function update(Request $request)
    {
         $id = $request->id;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'slug'=>'required',
            'active'=>'required'
        ]
    );

    if ($validator->fails()) {
        $response=array('status'=>'error','errors'=>implode(',', $validator->errors()->all()));
        // return response()->json($response, 400);
        return redirect("/admin/skills/$id/edit")
                ->withError(trans('Fill all fields to continue'));
    }else{
        $skill = Skill::findOrFail($id);
        $skill->name =  $request->name;
        $skill->slug =  $request->slug;
        $skill->active =  $request->active;

        $skill->save();

        return redirect("/admin/skills/$id/edit")
                    ->withSuccess(trans('skill updated', ['skill' => $skill->skill]));

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
    public function destroy($request, $id)
    {
        $skill = Skill::findOrFail($id);
        $skill->posts()->detach();
        $skills->delete();

        return redirect()
            ->route('skills')
            ->withSuccess(trans('Skill Deleted', ['skill' => $skill->skill]));
    }
}
