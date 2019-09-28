<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostFromRequest;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PostsController extends Controller
{

    public function index()
    {
        $posts = post::all();
        $posts = $posts->sortByDesc('id')->take(6);
        $categories = Category::all();
        return view('blog',compact('posts','categories'));
    }
    public function search()
    {
        $q = Input::get('q');
if (isset($_POST['submit']))
{

    if ( trim($q==null ) )
    {
        return redirect('/');
    }
    else{
        $posts = DB::table('posts')
            ->where('title', 'Like','%'.$q.'%')
            ->paginate(6);


        $categories = Category::all();

        return view('search',compact('posts','categories'));
}

}


//        return view('search')->with('status', 'There is no posts');

    }
    public function search2()
    {
        $q = Input::get('q');

        $posts = DB::table('posts')
            ->where('title', 'Like','%'.$q.'%')
            ->paginate(6);


        $categories = Category::all();

        return view('search',compact('posts','categories'));





//        return view('search')->with('status', 'There is no posts');

    }


    public function search_book()
    {
        $q = Input::get('q');

        $books = DB::table('books')
            ->where('Title', 'Like','%'.$q.'%')
            ->paginate(6);
        $categories = Category::all();

        return view('search_book',compact('categories','books'));


    }
    public function search_book2()
    {
        $q = Input::get('q');

        $books = DB::table('books')
            ->where('Title', 'Like','%'.$q.'%')
            ->paginate(6);
        $categories = Category::all();

        return view('search_book',compact('categories','books'));


    }




    public function index3()
    {

            $posts = post::all();
            return view('auth.login',compact('posts'));


    }
    public function index2()
    {
        if (Auth::check())
        {
            if (Auth::user()->admin == 1 && Auth::user()->email == 'saiwannaaung095@gmail.com') {
                $posts = post::all();

                return view('amdin_dashboard.view_post', compact('posts'));
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
            return view('amdin_dashboard.post',compact('categories'));
        }else{
            return redirect('/');
        }
            }
            else{
                return redirect('/');
            }

    }



    public function store(PostFromRequest $request)
    {
//return $request->all();
//dd($request->all());
        $slug = uniqid();
        $file = $request->file('post_img');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);
        $post = post::create([
            'title' => $request->get('title'),
            'content' => $request->get('post_content'),
            'imgs'=>$filename,
            'type' => $request->get('post_type'),
            'post_summery' => $request->get('post_summery'),
            'post_content2' => $request->get('post_content2'),
            'post_search' => $request->get('post_search'),
            'author' => $request->get('author'),
            'slug' => $slug
        ]);
        $post->save();
        return redirect('/posts')->with('status', 'Your posts has been created! Its unique id is: '.$slug);
    }


    public function show($slug)
    {
        $categories = Category::all();
        $rps = post::all()->random(2);
        $posts = post::whereSlug($slug)->first();

        return view('blog-details',compact('posts','categories','rps'));
    }
    public function article($name)
    {

        $posts = DB::table('posts')
            ->where('type', $name)
            ->paginate(6);

//        $posts = post::all();
        $categories = Category::all();
        return view('article',compact('posts','categories'));
    }
    public function books_download($name)
    {

        $books = DB::table('books')
            ->where('type', $name)
            ->paginate(6);


//        $posts = post::all();
        $categories = Category::all();
        return view('book',compact('books','categories'));
    }



    public function edit($slug)
    {
        if (Auth::check())
        {
        if (Auth::user()->admin == 1 && Auth::user()->email == 'saiwannaaung095@gmail.com') {

                $categories = Category::all();
            $post = post::whereSlug($slug)->first();
            return view('amdin_dashboard.edit_post',compact('post','categories'));
        }else{
            return redirect('/');
        }}else{
            return redirect('/');
        }

    }


    public function update(PostFromRequest $request, $slug)
    {

        $file = $request->file('post_img');
        $filename = uniqid().'_'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads/',$filename);

        $post = post::whereSlug($slug)->first();

             $post->title = $request->get('title');
             $post->content = $request->get('post_content');
             $post->imgs=$filename;
             $post->type = $request->get('post_type');
             $post-> post_summery = $request->get('post_summery');
             $post-> post_content2 = $request->get('post_content2');
             $post->post_search = $request->get('post_search');
             $post->author = $request->get('author');
             $post->slug = $slug;

        $post->save();
        return redirect(action('PostsController@index2')) ->with('status','The Proudct has been updated!');
    }



    public function destroy($slug)
    {
        $post = post::whereSlug($slug)->first();
        $post->delete();
        return redirect('/view_post')->with('status', 'The product '.$slug.' has been deleted!');
    }



}
