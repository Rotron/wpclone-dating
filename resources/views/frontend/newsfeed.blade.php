@extends('frontend.layouts.layout')
@section('content')

<<<<<<< HEAD
@include('frontend.include.slider')
=======
@if (Auth::guest())
@include('frontend.include.registerbox')
@else
<div class="container">
    <div class="col-md-12">
        <div id="main-slider">
            <div class="item">
                <img src="{{ url('frontres/img/main-slider1.jpg') }}" alt="" class="img-responsive">
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ url('frontres/img/main-slider2.jpg') }}" alt="">
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ url('frontres/img/main-slider3.jpg') }}" alt="">
            </div>
            <div class="item">
                <img class="img-responsive" src="{{ url('frontres/img/main-slider4.jpg') }}" alt="">
            </div>
        </div>
        <!-- /#main-slider -->
    </div>
</div>
@endif
>>>>>>> demo


<!-- *** Profile HOMEPAGE ***
_________________________________________________________ -->
        <div id="profile">
            <div class="container">
                <div class="same-height-row">
                    <div class="col-sm-12">

@foreach($users as $dates)
                        <div class="col-md-3">
                            <div class="item">
                                <div class="product PP">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <a href="#">
                                                    <img src="{{url('frontres/img/profile/1.jpg')}}" alt="" class="img-responsive">

                                                </a>
                                            </div>
                                            <div class="back">
                                                <a href="#">
                                                    <img src="{{url('frontres/img/profile/1.jpg')}}" alt="" class="img-responsive">

                                                </a>

                                            </div>
                                        </div>

                                    </div>

                                    <a href="#" class="invisible">
                                        <img src="{{url('frontres/img/profile/1.jpg')}}" alt="" class="img-responsive">
                                    </a>
                                    {{$dates->name}}
                                    <div class="text OO">

                                        <button type="submit" class="btn btn-default NN"><i class="fa fa-heart-o" aria-hidden="true"></i></button>

                                        <a href="/profile/{{$dates->id}}">
                                        <button type="submit" class="btn btn-default" id="GetDetails"><i class="fa fa-heart-o" aria-hidden="true"></i></button>
                                        </a>
                                    </div>
                                <!--
                                    <div class="ribbon new">
                                        <div class="theribbon">NEW</div>
                                        <div class="ribbon-background"></div>
                                    </div>
                             /.text -->
                                </div>
                        <!-- /.product -->
                            </div>
                        </div>

@endforeach


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /#profile -->
        <!-- *** PROFILE END *** -->
@stop
