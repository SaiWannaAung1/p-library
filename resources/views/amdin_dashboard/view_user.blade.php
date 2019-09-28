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
            <th>Email</th>
            <th>Create date</th>
            <th>Status</th>
            <th>Role</th>
            <th>Band</th>

          </tr>
          </thead>

          <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
<td>#</td>
            {{--@if($user->isOnline())--}}
             {{--<l1 class="text-success">Online</l1>--}}
            {{--@else--}}
              {{--<l1 class="text-muted">Offline</l1>--}}
            {{--@endif--}}

            @if($user->admin == 0)
            <td>User</td>
            @else
            <td>Admin</td>
@endif
            <form method="post" action="{{action('FaqController@destroy', $user->id)}}" class="pull-left">
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