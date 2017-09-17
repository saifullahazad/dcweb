@extends('layouts.app')

@section('content')
<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="my-carousel" class="carousel slide" data-ride="carousel" data-interval="2200">
                        <ol class="carousel-indicators">
                            <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#my-carousel" data-slide-to="1"></li>
                            <li data-target="#my-carousel" data-slide-to="2"></li>

                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="slider/5.jpg" alt="slide-1">
                            </div>
                            <div class="item">
                                <img src="slider/6.jpg" alt="slide-2">
                            </div>
                            <div class="item">
                                <img src="slider/7.jpg" alt="slide-2">
                            </div>

                        </div>
                        <a href="#my-carousel" class="left carousel-control" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a href="#my-carousel" class="right carousel-control" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection
