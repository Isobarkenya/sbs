<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;


class ContactController extends Controller
{
    /**
     * Show the application contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageData = [
            'pageTitle' => trans('larablog.contact.pageTitle'),
            'pageDesc'  => trans('larablog.contact.pageDesc'),
            'title'     => trans('larablog.contact.title'),
            'subtitle'  => trans('larablog.contact.subtitle'),
            'image'     => config('blog.contact_page_image'),
        ];

        return view('blog.pages.contact', $pageData);
    }

    /**
     * Send Contact Email Function via Mail.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactSend(ContactRequest $request)
    {
        $validatedData = $request->validated();

        Mail::to(config('blog.contact_email'))->send(new ContactMail($validatedData));

        return back()->withSuccess(trans('forms.contact.messages.sent'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'skill' => 'required',
            'band'=>'required',
            'division'=>'required'
        ]
    );

    if ($validator->fails()) {
        $response=array('status'=>'error','errors'=>implode(',', $validator->errors()->all()));
        // return response()->json($response, 400);
        return Redirect::to(URL::previous() . "#form")->withError(trans('Fill all fields to continue'));
    }else{
        $choosenskill = new Contact();
        $choosenskill->skill = $request->skill;
        $choosenskill->band = $request->band;
        $choosenskill->division = $request->division;

        $choosenskill->save();
        return Redirect::to(URL::previous() . "#form")->withSuccess(trans('Skill Created  Successfully'));

        // return back()->
    }
    }
}
