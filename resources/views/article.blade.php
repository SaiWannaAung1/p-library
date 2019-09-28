@extends('master.b_master')
@section('meta')
    <meta property="og:url"           content="https://www.p-libmm/article" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Article" />
    <meta property="og:description"   content="Welcome from p-libary" />
    <meta property="og:image"         content="https://p-libmm.com/img/core-img/logo.png" />
@endsection
@section('title','P-LIBRARY | ARTICLE')
@section('content')
    <section class="popular-courses-area section-padding-100-0" style="background-image: url('{{('img/core-img/texture.png')}}') ;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <br>
                        <br>
                        <br>
                        <h3>Articles</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @if($posts->isEmpty())
                    <h5>There is no Articles</h5>
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
                                        <a href="#">{{$post->type}}</a>

                                    </div>
                                    <p> {{\Illuminate\Support\Str::limit($post->content, 20,'....')}}</p>
                                </div>
                                <!-- Seat Rating Fee -->
                                <div class="seat-rating-fee d-flex justify-content-between">
                                    <div class="seat-rating h-100 d-flex align-items-center">
                                        <div class="seat">

                                        </div>
                                        <div class="rating">

                                        </div>
                                    </div>
                                    <div class="course-fee h-100">

                                        <a href="{{action('PostsController@show', $post->slug)}}" class="free">READ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
@endif

            </div>
            <div class="row">
            </div>
        </div>
        <div class="related-posts mb-50">
            <div class="container-fluid">
                <div class="row pb-2">
                    <!-- Single Blog Area -->
                    <div class="col-12 col-lg-12" style="background-color: white">
                        <div class="single-blog-area mb-100" style="background-color: white">

                        </div>
                    </div>


                </div>


            </div>
        </div>
    </section>
@endsection