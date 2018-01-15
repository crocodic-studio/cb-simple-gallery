@extends('layout')
@section('content')
<!-- start content -->
<div id="fh5co-main">
	<div class="container">
		<div class="row">
	        <div id="fh5co-board" data-columns>
	        	@foreach($gallery as $q)
	        	<div class="item">
	        		<div class="animate-box">
		        		<a href="{{asset('/')}}{{$q->image}}" class="image-popup fh5co-board-img" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, eos?">
		        			<img src="{{asset('/')}}{{$q->image}}" alt="">
		        		</a>
	        		</div>
	        		<div class="fh5co-desc">{{$q->description}}</div>
	        	</div>  
	        	@endforeach	
	        </div>
        </div>
    </div>
</div>
<!-- end content -->
@endsection