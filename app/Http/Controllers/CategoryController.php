<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function insert_cateogry(){
        if (Auth::check())
        {
        if (Auth::user()->admin == 1 && Auth::user()->email == 'saiwannaaung095@gmail.com') {
            return view('amdin_dashboard.insert_category');
        }else{
            return redirect('/');
        }
        }else{
            return redirect('/');
        }
    }

    public function view_cateogry(){
        if (Auth::check())
        {
        if (Auth::user()->admin == 1 && Auth::user()->email == 'saiwannaaung095@gmail.com') {
            $categories = \App\Category::all();

            return view('amdin_dashboard.view_category', compact('categories'));
        }else{
            return redirect('/');
        } }else{
            return redirect('/');
        }
    }

    public function store(Category $request)
    {
        $category = \App\Category::create([
            'category_name' => $request->get('category_name')

        ]);
        $category->save();
        return redirect('/insert_category')->with('status', 'Your Cate has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check())
        {
        if (Auth::user()->admin == 1 && Auth::user()->email == 'saiwannaaung095@gmail.com') {
            $category = \App\Category::whereId($id)->first();
            return view('amdin_dashboard.category_update',compact('category'));
        }else{
            return redirect('/');
        }
        }else{
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
    public function update(Category $request, $id)
    {
        $category = \App\Category::whereId($id)->first();

        $category->category_name = $request->get('category_name');

        $category->save();
        return redirect(action('CategoryController@view_cateogry')) ->with('status','The Proudct has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = \App\Category::whereId($id)->first();
        $category->delete();
        return redirect('/view_category')->with('status', 'The product '.$id.' has been deleted!');
    }


}
