<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function insert_contact(){

            $categories = Category::all();
            return view('contact',compact('categories'));

    }
    public function store(ContactRequest $request)
    {
        if (Auth::check())
        {
            $email = Auth::user()->email;

            $contact = \App\Contact::create([
                'email'=>$email,
                'content' => $request->get('content')

            ]);
            $contact->save();
            return redirect('/contact')->with('status', 'Your Cate has been created');
        }else{
            return redirect('/contact')->with('status', 'You Need to Login?');

        }


    }
    public function view_contact()
    {
        if (Auth::check())
        {
        if (Auth::user()->admin == 1 && Auth::user()->email == 'saiwannaaung095@gmail.com') {

   $contacts = Contact::all();
   return view('amdin_dashboard.view_contact', compact('contacts'));
        }else{
            return redirect('/');
        }}else{
            return redirect('/');
        }
    }

    public function destroy($id)
    {
        $contacts = Contact::whereId($id)->first();
        $contacts->delete();
        return redirect('/view_contact')->with('status', 'The contact '.$id.' has been deleted!');
    }


}
