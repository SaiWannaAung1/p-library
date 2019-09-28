@extends('master.b_master')
@section('title','P-library | contact')
@section('content')
    <!-- ##### Google Maps ##### -->
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122445.67321073437!2d97.58914644903093!3d16.45388795941835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c2a8b3d95f5559%3A0x6fafc8c3a8dd3009!2sMawlamyine!5e0!3m2!1sen!2smm!4v1565198840936!5m2!1sen!2smm" class="container-fluid" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <!-- Contact Info -->
                <div class="col-12 col-lg-6">
                    <div class="contact--info mt-50 mb-100">
                        <h4>Contact Info</h4>
                        <ul class="contact-list">
                            <li>
                                <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Business Hours</h6>
                                <h6>Always</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-phone" aria-hidden="true"></i> Number</h6>
                                <h6>+44 300 303 0266</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-envelope" aria-hidden="true"></i> Email</h6>
                                <h6>admin@p-library.com</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-map-pin" aria-hidden="true"></i> Address</h6>
                                <h6>Myanmar,Mawlamyine</h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-12 col-lg-6">
                    <div class="contact-form">
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
                        <h4>Send Mail</h4>
                        
                        <form method="post" action="{{action('ContactController@store')}}">
                            @csrf
                            <div class="row">


                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="content" class="form-control" id="message" cols="30" rows="10" placeholder="Message" ></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn clever-btn w-100" type="submit">Post A Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->
@endsection