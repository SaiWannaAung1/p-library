@extends('master.b_master')
@section('title','P-library | FAQ')
@section('content')
    <section class="popular-courses-area section-padding-100-0" style="background-image: url('{{('img/core-img/texture.png')}}') ;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>FAQ</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                @if($faqs->isEmpty())
                    <h5>There is no FAQs</h5>
@else

                    @foreach($faqs as $faq)


                        <div class="accordion col-md-12" id="accordionExample{{$faq->id}}">

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo{{$faq->id}}" aria-expanded="false" >
                                        Q:   {{$faq->question}}
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo{{$faq->id}}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample{{$faq->id}}">
                                    <div class="card-body">
                                      {{$faq->answer}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
@endif

            </div>
            <div class="row">

            </div>
        </div> <br>
        <br>
        <br>
    </section>

@endsection