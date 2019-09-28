@extends('master.b_master')
@section('meta')
    <meta property="og:url"           content="https://www.p-libmm/blog_detail" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ $posts->title }}" />
    <meta property="og:description"   content="{{ $posts->post_summery}}" />
    <meta property="og:image"         content="https://p-libmm.com/uploads/{{$posts->imgs}}" />
@endsection
@section('title','P-Library | Blog Detail')


@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">Art &amp; Design</li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Catagory Area Start ##### -->
    <div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image:url('{{('/uploads/'.$posts->imgs)}}');">
        <div class="blog-details-headline">
            <h3> {{$posts->title}}</h3>
            <div class="meta d-flex align-items-center justify-content-center">
                <a href="#">{{$posts->author}}</a>
                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                <a href="#">{{$posts->type}}</a>

            </div>
        </div>
    </div>
    <!-- ##### Catagory Area End ##### -->

    <!-- ##### Blog Details Content ##### -->
    <div class="blog-details-content section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-2 pb-2">
                    <div class="row">

                        <div class="col-12 col-lg-12">
                            <!-- Blog Details Text -->
                            <div class="blog-details-text">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 ">
                    <div class="row">

                        <div class="col-12 col-lg-12">
                            <!-- Blog Details Text -->
                            <div class="blog-details-text">

                                <p style="text-align: justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$posts->content}}</p>
                                <h5 class="text-center py-4">{{$posts->post_summery}}.</h5>
                                <p style="text-align: justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$posts->post_content2}}</p>
                                <!-- Tags -->
                                <div class="post-tags">
                                    <ul>
                                        <li><a href="#">    <div class="fb-share-button"
                                                                 data-href="{{$uri =Request::url() }}"
                                                                 data-layout="button_count">
                                                </div></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-2 pt-2">
                    <div class="row">

                        <div class="col-12 col-lg-12">
                            <!-- Blog Details Text -->
                            <div class="blog-details-text">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-lg-2">
                        <div class="single-blog-area mb-100" >

                        </div>
                    </div>
                    <!-- Single Blog Area -->
                    @foreach($rps as $rp)
<a href="{{action('PostsController@show', $rp->slug)}}" style="cursor: pointer">
                    <div class="col-12 col-lg-4">
                        <div class="single-blog-area mb-100">
                            <img src="{{asset('/uploads/'.$rp->imgs)}}" alt="">
                            <!-- Blog Content -->
                            <div class="blog-content">
                                <a href="{{action('PostsController@show', $rp->slug)}}" class="blog-headline">
                                    <h4 style="font-family: Pyidaungsu">{{$rp->title}}</h4>
                                </a>
                                <div class="meta d-flex align-items-center">
                                    <a href="{{action('PostsController@show', $rp->slug)}}" style="font-family: Pyidaungsu">{{$rp->author}}</a>
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                    <a href="{{action('PostsController@show', $rp->slug)}}" style="font-family: Pyidaungsu">{{$rp->type}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        </a>

@endforeach
                    <div class="col-12 col-lg-2">
                        <div class="single-blog-area mb-100" >

                        </div>
                    </div>
                </div>

            </div>
        </div>







    <!-- ##### Blog Details Content ##### -->
@endsection