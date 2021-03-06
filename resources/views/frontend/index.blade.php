@extends('frontend.layouts.layout')
@section('content')



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


<!-- *** Profile HOMEPAGE ***
_________________________________________________________ -->
<div id="profile">
    <div class="container">
        <div class="same-height-row">
            <div class="col-sm-12 text-left">
                <button type="submit" class="btn btn-primary" id="new-updates"></button>
            </div>
            </br>

            <div class="col-sm-12">
                @foreach($users as $dates)

                <div class="col-md-2">
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="#">
                                            <img src="{{ url('frontres/img/profile/1.jpg') }}" alt="" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="#">
                                            <img src="{{ url('frontres/img/profile/1.jpg') }}" alt="" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="invisible">
                                <img src="{{ url('frontres/img/profile/1.jpg') }}" alt="" class="img-circle img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="#">{{$dates->name}}</a></h3>
                                <p class="qw">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                            <!-- /.text -->
                            <div class="col-sm-12 text-center">
                              <a href="/profile/{{$dates->id}}">
                                <button type="submit" class="btn btn-primary" id="get-details"></button>
                                </a>
                            </div>
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

<div id="profile">
    <div class="container">
        <div class="same-height-row">
            <div class="col-sm-12 text-left">
                <button type="submit" class="btn btn-primary" id="feature-details"></button>
            </div>
            </br>

            <div class="col-sm-12">
                <div class="col-md-5">
                    <h3 class="QE">Lorem Ipsum is simply dummy</h3>
                    <p class="QE">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. </br>

                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>

                </div>
                <div class="col-md-7">

                    <img src="{{ url('frontres/img/center-image.jpg') }}" class="img-circle img-rounded img-responsive">

                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
<!-- *** GET INSPIRED END *** -->
@stop
