@extends('master.b_master')
@section('title','P-library | Blog')
@section('content')
    <section class="popular-courses-area section-padding-100-0" style="background-image: url('{{('img/core-img/texture.png')}}') ;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Popular Posts</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                @if($posts->isEmpty())
                    <h5>There is no Data</h5>
@else
                    @foreach($posts as $post)
                    <!-- Single Popular Course -->
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                                <img src="{{'/uploads/'.$post->imgs}}" alt="">
                                <!-- Course Content -->
                                <div class="course-content">
                                    <h4>{{$post->title}}</h4>
                                    <div class="meta d-flex align-items-center">
                                        <a href="#">{{$post->author}}</a>
                                        <span><i class="fa fa-circle" aria-hidden="true"></i></span>

                                        @if($post->type==1)
                                            <a href="#">Tayel</a>
                                        @elseif($post->type==2)
                                            <a href="#">Novel</a>
                                        @endif
                                    </div>
                                    <p> {{\Illuminate\Support\Str::limit($post->content, 20,'....')}}</p>
                                </div>
                                <!-- Seat Rating Fee -->
                                <div class="seat-rating-fee d-flex justify-content-between">
                                    <div class="seat-rating h-100 d-flex align-items-center">
                                        <div class="seat">
                                            <i class="fa fa-user" aria-hidden="true"></i> 10
                                        </div>
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                        </div>
                                    </div>
                                    <div class="course-fee h-100">

                                        <a href="{{action('PostsController@show', $post->slug)}}" class="free">Free</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

{{--------------------------------Books-----------------------------}}



@endif

            </div>
            <div class="row ">
                <div class="col-md-4">   </div><div class="col-md-4">   {{$posts->render()}} </div>
                <div class="col-md-4">  </div>
<br>
<br>
<br>
            </div>
        </div>
    </section>
@endsection