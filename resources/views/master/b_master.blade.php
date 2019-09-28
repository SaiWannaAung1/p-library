<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    {{--<title>Clever - Education &amp; Courses Template | Blog</title>--}}
    <title>@yield('title')</title>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@yield('meta')


    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/core-img/logo.png')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="spinner"></div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">


    <div class="clever-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="cleverNav">

                <!-- Logo -->
                <a class="nav-brand" href="{{url('/')}}"><img src="{{asset('img/core-img/logo.png')}}" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#">Articles</a>
                                <ul class="dropdown">
                                    @foreach($categories->all() as $category)
                                        <li><a class="btn-warning" style="color: #FFFFFF" href="{{action('PostsController@article', $category->category_name)}}">{{$category->category_name}}</a></li>

                                    @endforeach

                                </ul>
                            </li>
                            <li><a href="#">Books</a>
                                <ul class="dropdown">
                                    @foreach($categories->all() as $category)
                                        <li><a class="btn-warning" style="color: #FFFFFF" href="{{action('PostsController@books_download', $category->category_name)}}">{{$category->category_name}}</a></li>

                                    @endforeach

                                </ul>
                            </li>
                            <li><a href="{{url('/faq')}}">FAQ</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
@if(\Route::current()->getName() == 'book_Route')

                        <!-- Search Button -->
                        <div class="search-area">
                            <form action="{{\Illuminate\Support\Facades\URL::to('/search_book')}}" method="post">
                                @csrf
                                <input type="search" name="q" id="search" placeholder="Search" >
                                <button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
@else
        <div class="search-area">
            <form action="{{\Illuminate\Support\Facades\URL::to('/search')}}" method="post">
                @csrf
                <input type="search" name="q" id="search" placeholder="Search" >
                <button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
                        @endif
                        <!-- Register / Login -->
                        <div class="register-login-area">

                            <!-- Authentication Links -->
                            @guest

                                <a class="btn active" href="{{ route('login') }}">{{ __('Login') }}</a>

                                @if (Route::has('register'))

                                        <a class="btn active" href="{{ route('register') }}">{{ __('Register') }}</a>

                                @endif
                            @else

                                <a  class="btn active dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    @if(Auth::user()->email =='saiwannaaung095@gmail.com')
                                        <a class="dropdown-item"  href="{{url('/view_user')}}"><i class="fa fa-user" style="color: #444eff">  Admin</i>

                                        </a>
                                    @endif

                                    <a class="dropdown-item"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-user" style="color: red">   {{ __('Logout') }}</i>

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>



                                </div>

                            @endguest

                        </div>

                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
@yield('content')









<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <!-- Top Footer Area -->
    <div class="top-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="{{url('/')}}"><h4 style="font-weight: bold; color: #FFFFFF">P-LIBRARY</h4></a>
                    </div>
                    <!-- Copywrite -->
                    <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area d-flex justify-content-between align-items-center">
        <!-- Contact Info -->
        <div class="contact-info">
            <a href="#"><span>Phone:</span> ++95 960175323</a>
            <a href="#"><span>Email:</span> info@p-libmm.com</a>
        </div>
        <!-- Follow Us -->
        <div class="follow-us">
            <span>Follow us</span>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('js/plugins/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/active.js')}}"></script>
</body>

</html>