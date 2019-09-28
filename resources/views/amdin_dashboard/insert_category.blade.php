@extends('master.admin_master')
@section('title','Admin | post')
@section('content')
  <!-- Begin Page Content -->
  <br>
  <br>
  <br>
  <br>
  <div class="container-fluid">
    <form method="post" enctype="multipart/form-data">

      @csrf

      <div class="row">
        <div class="col-md-12">


          <div class="card">
            <br>
            <h3 style="text-align: center;color: black">Insert Category</h3>
            <div class="card-body">
              @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
              @endforeach
              @if(session('status'))
                <p class="alert alert-success">{{session('status')}}</p>
              @endif
              <div class="form-group">
                <label for="position-top-right">Category Name</label>
                <input type="text" id="position-top-right" class="form-control" name="category_name">
              </div>

                <br>
              <button type="reset" class="btn btn-warning float-left">Cancel</button>
              <button type="submit" class="btn btn-info float-right">Post</button>
            </div>

          </div>

        </div>

      </div>

    </form>
  </div>


  <!-- /.container-fluid -->

@endsection