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
            <th>Create date</th>
            <th>Update</th>
            <th>Delete</th>

          </tr>
          </thead>

          <tbody>
          @foreach($faqs as $faq)
          <tr>
            <td>{{\Illuminate\Support\Str::limit($faq->question, 11,'....')}}</td>
            <td>{{\Illuminate\Support\Str::limit($faq->answer, 30,'....')}}</td>
            <td>{{$faq->created_at}}</td>
            <td>       <a class="nav-link" href="{{action('FaqController@edit', $faq->slug)}}"><i class="fa fa-edit"> </i></a></td>

            <form method="post" action="{{action('FaqController@destroy', $faq->slug)}}" class="pull-left">
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