@extends('layouts.home')
@section('content')
<div class="events">
        <div class="container">
        <div class="event-text">
            <h3>Question</h3>
        </div>
            <div class=" events-grid-1">
                <div class="col-md-4 ev-wrapper animated wow fadeInLeft animated" data-wow-duration="1000ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInLeft;">
                <a href="single.html">
                    <div class="ev-wrap">
                        <img src="{{asset('home/images/ev.jpg')}}" alt="" class="img-responsive">
                        <div class="events-grid">
                            <h6>NEWS</h6>
                            <div class="events-gr">
                                <span>20,April</span>
                                <h4>Lorem ipsum dolor sit</h4>
                                <ul>
                                    <li><i class="glyphicon glyphicon-heart"></i>10</li>
                                    <li><i class="glyphicon glyphicon-comment"></i>2</li>
                                </ul>
                            </div>
                        </div>
                        <div class="grid-ev"></div>             
                        </div>
                    </a>
                </div>
            <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
