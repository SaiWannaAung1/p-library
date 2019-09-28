<?php

namespace App\Http\Controllers;

use App\Books;
use App\Category;
use App\Http\Requests\BooksFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
//

    public function index()
    {
        $books = Books::all();
        $categories = Category::all();
        return view('book',compact('books','categories'));
    }
  public function index3($slug)
    {
        $books = Books::whereSlug($slug)->first();
        return  response()->download(public_path('uploads_PDF/'.$books->pdf));
//        return Storage::download( public_path('uploads_PDF/'.$books->pdf ) ,$books->Title);
    }

    public function index2()
    {
        if (Auth::check())
        {
        if (Auth::user()->admin == 1 && Auth::user()->email == 'saiwannaaung095@gmail.com') {
            $books = Books::all();

            return view('amdin_dashboard.view_book', compact('books'));
        }else{
            return redirect('/');
        }
        }else{
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check())
        {
        if (Auth::user()->admin == 1 && Auth::user()->email == 'saiwannaaung095@gmail.com') {
            $categories = Category::all();
            return view('amdin_dashboard.insert_book',compact('categories'));
        }else{
            return redirect('/');
        }}else{
            return redirect('/');
        }

    }



    public function store(BooksFormRequest $request)
    {
//return $request->all();
//dd($request->all());
        $slug = uniqid();
        $file = $request->file('book_img');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);

        $file1 = $request->file('book_upload');
        $filename1 = uniqid().'_'.$file1->getClientOriginalName();
        $file1->move(public_path().'/uploads_PDF/',$filename1);


        $book = Books::create([
            'Title' => $request->get('title'),
            'type' => $request->get('book_type'),
            'post_search' => $request->get('book_search'),
            'author' => $request->get('author'),
            'img'=>$filename,
            'pdf'=>$filename1,
            'slug' => $slug
        ]);
        $book->save();
        return redirect('/books')->with('status', 'Your books has been Upload! Its unique id is: '.$slug);
    }


    public function show($slug)
    {

        $posts = post::whereSlug($slug)->first();

        return view('blog-details',compact('posts'));
    }



    public function edit($slug)
    {
        if (Auth::check())
        {
        if (Auth::user()->admin == 1 && Auth::user()->email == 'saiwannaaung095@gmail.com') {
            $book = Books::whereSlug($slug)->first();
            $categories = Category::all();
            return view('amdin_dashboard.book_update',compact('book','categories'));
        }else{
            return redirect('/');
        }
        }else{
            return redirect('/');
        }

    }


    public function update(BooksFormRequest $request, $slug)
    {

        $file = $request->file('book_img');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);

        $file1 = $request->file('book_upload');
        $filename1 = uniqid().'_'.$file1->getClientOriginalName();
        $file1->move(public_path().'/uploads_PDF/',$filename1);

        $book = Books::whereSlug($slug)->first();

        $book->Title = $request->get('title');
        $book->img=$filename;
        $book->pdf=$filename;
        $book->type = $request->get('book_type');
        $book->post_search = $request->get('book_search');
        $book->author = $request->get('author');

        $book->save();
        return redirect(action('PostsController@index2')) ->with('status','The Proudct has been updated!');
    }



    public function destroy($slug)
    {
        $book = Books::whereSlug($slug)->first();
        $book->delete();
        return redirect('/view_book')->with('status', 'The product '.$slug.' has been deleted!');
    }


}
