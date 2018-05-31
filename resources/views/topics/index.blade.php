@extends('layouts.home')
@section('content')
<div class="container">
	<div class="event-text">
        <h3>Topics</h3>
    </div>
    <div class=" events-grid-1">
		@foreach($topics as $topic)
		<div class="col-md-6 content-img animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms" style="margin-bottom:30px">
			<a href="single.html" rel="title" class="b-link-stripe b-animate-go  thickbox">
			<img class="img-responsive" src="{{$topic->back_img}}" />
			<div class="b-wrapper">
				<h4 class="b-animate b-from-left  b-delay03 ">
					<span>{{$topic->topic}}</span>	
				</h4>
			</div>
            </a>
		</div>
		@endforeach
			
		<div class="clearfix"></div>
		</div>
	</div>
@endsection
