<?php

namespace App\Http\Controllers;

use App\Category;
use App\faq;
use App\post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{

    public function index()
    {
        if (Auth::check())
        {
        if (Auth::user()->admin == 1 && Auth::user()->email == 'saiwannaaung095@gmail.com') {
            return view('amdin_dashboard.insert_faq');
        }else{
            return redirect('/');
        }}else{
            return redirect('/');
        }

    }
    public function index2()
    {

            $categories = Category::all();
            $faqs = faq::all();
            return view('faq',compact('faqs','categories'));


    }
    public function view_faq()
    {
        if (Auth::check())
        {
        if (Auth::user()->admin == 1 && Auth::user()->email == 'saiwannaaung095@gmail.com') {
            $faqs = faq::all();

            return view('amdin_dashboard.view_faq',compact('faqs'));
        }else{
            return redirect('/');
        } }else{
            return redirect('/');
        }


    }

    public function edit($slug)
    {
        if (Auth::check())
        {
        if (Auth::user()->admin == 1 && Auth::user()->email == 'saiwannaaung095@gmail.com') {
            $post = post::whereSlug($slug)->first();
            $faq = faq::whereSlug($slug)->first();
            return view('amdin_dashboard.faq_update',compact('faq'));
        }else{
            return redirect('/');
        }}else{
            return redirect('/');
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\faq $request, $slug)
    {
        $current_timestamp = Carbon::now()->timestamp;
        $faq = faq::whereSlug($slug)->first();
        $faq->question = $request->get('question');
        $faq->answer = $request->get('answer');
        $faq->slug = $slug;
        $faq->updated_at = $current_timestamp;

        $faq->save();
        return redirect(action('FaqController@view_faq')) ->with('status','The FAQ has been updated!');
    }




    public function store(\App\Http\Requests\faq $request){
        $slug = uniqid();
        faq::create([
            'question'=>$request->get('question'),
            'answer'=>$request->get('answer'),
            'slug' => $slug


        ]);

        return redirect('insert_faq')->with('status','Successfull Inserted FAQ ' );
    }

    public function destroy($slug)
    {
        $faq = faq::whereSlug($slug)->first();
        $faq->delete();
        return redirect('/view_faq')->with('status', 'The product '.$slug.' has been deleted!');
    }

}
