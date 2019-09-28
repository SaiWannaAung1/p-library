@extends('master.admin_master')
@section('title','Admin | Book')
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
        <form method="post" enctype="multipart/form-data">

          @if(session('status'))
            <div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              {{session('status')}}
            </div>

            @endif

          @csrf
          <div class="form-group">
            <label for="exampleFormControlInput1" style="color: black">Book Title</label>
            <input class="form-control"  placeholder="Enter Book Title" name="title">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1" style="color: black">Book Type</label>
            <select class="form-control" id="exampleFormControlSelect1" name="book_type">
              @foreach($categories->all() as $category)
                <option value='{{$category->category_name}}'>{{$category->category_name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
          <label  style="color: black">Book Image</label>
          <div class="input-group">


            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01" >Upload</span>
            </div>

            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01"
                     aria-describedby="inputGroupFileAddon01" name="book_img">
              <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
            </div>
          </div>
          </div>
            <div class="form-group">
          <label  style="color: black">Book Upload</label>
          <div class="input-group">


            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01" >Upload</span>
            </div>

            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01"
                     aria-describedby="inputGroupFileAddon01" name="book_upload">
              <label class="custom-file-label" for="inputGroupFile01">Choose Book</label>
            </div>
          </div>
          </div>

            <div class="form-group">
              <label for="exampleFormControlInput1" style="color: black">Book Search</label>
              <input class="form-control"  placeholder="Type Search Keyword" name="book_search"> </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" style="color: black">Book Author</label>
                <input class="form-control"  placeholder="Type Author" name="author">
            </div>

          <button type="submit" class="btn btn-primary">Save</button>
          <button type="reset" class="btn btn-warning">Cancel</button>

        </form>

      </div>

    </div>

  </div>
  <!-- /.container-fluid -->

@endsection