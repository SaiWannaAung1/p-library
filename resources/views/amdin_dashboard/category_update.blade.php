@extends('master.admin_master')
@section('title','Admin | post')
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <form method="post" enctype="multipart/form-data">
      @csrf

      <div class="row">
        <div class="col-md-12">


          <div class="card">
            <div class="card-body">
              @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  {{$error}}
                </div>
              @endforeach

              <div class="form-group">
                <label for="position-top-right">Category Name</label>
                <input type="text" id="position-top-right" class="form-control" name="category_name" value="{{$category->category_name}}">
              </div>


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