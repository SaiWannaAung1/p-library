<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {

        if (Auth::check())
        {
        if (Auth::user()->admin == 1 && Auth::user()->email == 'saiwannaaung095@gmail.com') {
            $users = User::all();

            return view('amdin_dashboard.view_user',compact('users'));
        }else{
            return redirect('/');
        }
        }else{
            return redirect('/');
        }
    }
    public function band($id)
    {
    }




}