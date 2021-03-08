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

class DashboarddataController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dashboarddata = Dashboarddata::all();

        return view('admin.dashboarddata.index',compact('dashboarddata'));

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
        $dashboarddata = Dashboarddata::findOrFail($id);


        return view('admin.dashboarddata.edit', compact('dashboarddata'));
    }


    public function update(Request $request)
    {
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'fied1' => 'required',
            'fied2'=>'required',
            'fied3'=>'required',
            'fied4'=>'required',
            'fied5'=>'required',
            'fied6'=>'required',
            'fied7'=>'required',
            'fied8'=>'required',
            'fied9'=>'required',
            'fied10'=>'required',
            'fied11'=>'required',
        ]
    );

    if ($validator->fails()) {
        $response=array('status'=>'error','errors'=>implode(',', $validator->errors()->all()));
        // return response()->json($response, 400);
        return redirect("/admin/dashboarddata/$id/edit")
                ->withError(trans('Fill all fields to continue'));
    }else{
        $dashboarddata =Dashboarddata::findOrFail($id);
        $dashboarddata->Business_Development_Division =  $request->fied1;
        $dashboarddata->CEO_Office =  $request->fied2;
        $dashboarddata->Commercial_Division =  $request->fied3;
        $dashboarddata->Corporate_Affairs_Division=  $request->fied4;
        $dashboarddata->Corporate_Security_Division=  $request->fied5;
        $dashboarddata->EBUD =  $request->fied6;
        $dashboarddata->Finance_Division =  $request->fied7;
        $dashboarddata->Financial_Services_Division =  $request->fied8;
        $dashboarddata->Resource_Division =  $request->fied9;
        $dashboarddata->Technology_Division =  $request->fied10;
        $dashboarddata->VGE_Division =  $request->fied11;

        $dashboarddata->save();

        return redirect("/admin/dashboarddata/$id/edit")
                    ->withSuccess(trans('skill updated', ['dashboarddata' => $dashboarddata->dashboarddata]));

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
