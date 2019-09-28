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

            <th>ID</th>
            <th>Email</th>
            <th>Create date</th>
            <th>View</th>
            <th>Delete</th>

          </tr>
          </thead>

          <tbody>
          @foreach($contacts as $contact)
          <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->created_at}}</td>
            <td>    <!-- Button trigger modal -->
              <button class="fa fa-eye btn" style="color: #333bff;background-color: transparent;" data-toggle="modal" data-target="#exampleModalCenter{{$contact->id}}" >
              </button></td>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                   {{$contact->Content}}
                  </div>
                  <div class="modal-footer">


                  </div>
                </div>
              </div>
            </div>
            {{--end of modal--}}
            <form method="post" action="{{action('ContactController@destroy', $contact->id)}}" class="pull-left">
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