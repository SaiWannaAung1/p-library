@extends('master.admin_master')
@section('title','Admin | post')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

  {{--<!-- Page Heading -->--}}
  {{--<h1 class="h3 mb-1 text-gray-800">Posts Insert</h1>--}}
  {{--<br>--}}
  {{--<br>--}}

  <!-- Content Row -->
    <div class="row">



      <!-- Border Bottom Utilities -->
      <div class="col-lg-12">
        @foreach($errors->all() as $error)
          <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{$error}}
          </div>
        @endforeach
          @if(session('status'))
            <div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              {{session('status')}}
            </div>
          @endif

        <form method="post" enctype="multipart/form-data">


          @csrf
          <div class="form-group">
            <label for="exampleFormControlInput1" style="color: black">Post Title</label>
            <input class="form-control"  placeholder="Enter Post Title" name="title" value="{{$post->title}}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1" style="color: black">Post Type</label>
            <select class="form-control" id="exampleFormControlSelect1" name="post_type" >
              @foreach($categories->all() as $category)
                <option value='{{$category->category_name}}'>{{$category->category_name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label  style="color: black">Post Image</label>
            <div class="input-group">


              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01" >Upload</span>
              </div>

              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01"
                       aria-describedby="inputGroupFileAddon01" name="post_img">
                <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1" style="color: black">Post Content 1</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Content . . . . . ." name="post_content">{{$post->content}}"</textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" style="color: black">Post Summery</label>
            <input class="form-control"  placeholder="Enter Post Title" name="post_summery" value="{{$post->post_summery}}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1" style="color: black">Post Content 2</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Content . . . . . ." name="post_content2">{{$post->post_content2}}</textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" style="color: black">Post Search</label>
            <input class="form-control"  placeholder="Type Search Keyword" name="post_search" value="{{$post->post_search}}"> </div>

          <div class="form-group">
            <label for="exampleFormControlInput1" style="color: black">Post Author</label>
            <input class="form-control"  placeholder="Type Author" name="author" value="{{$post->author}}">
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
          <button type="reset" class="btn btn-warning">Cancel</button>

        </form>

      </div>

    </div>

  </div>
  <!-- /.container-fluid -->

@endsection