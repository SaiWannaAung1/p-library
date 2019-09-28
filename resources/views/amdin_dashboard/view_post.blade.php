@extends('master.admin_master')
@section('title','Admin | View All Posts')
@section('content')
  <!-- DataTales Example -->
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
  <div class="container-fluid">
  <div class="card shadow mb-12">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
          <thead>

          <tr >

            <th>Name</th>
            <th>Type</th>
            <th>Image</th>
            <th>Start date</th>
            <th>Update</th>
            <th>Delete</th>

          </tr>
          </thead>

          <tbody>
          @foreach($posts as $post)
          <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->type}}</td>
            <td><img src="{{'/uploads/'.$post->imgs}}" alt="" style="  width: 50px;
  height: 50px; border-radius:10px;"></td>
            <td>{{$post->created_at}}</td>
            <td>       <a class="nav-link" href="{{action('PostsController@edit', $post->slug)}}"><i class="fa fa-edit"> </i></a></td>

            <form method="post" action="{{action('PostsController@destroy', $post->slug)}}" class="pull-left">
              @csrf

              <td><button class="fa fa-trash-alt btn" style="color: red;background-color: transparent;" type="submit"  > </button></td>
            </form>

          </tr>

            @endforeach

          </tbody>
        </table>
        <br>
      </div>
    </div>
  </div>

  </div>
@endsection