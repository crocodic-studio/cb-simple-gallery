@extends('layout')
@section('content')
<!-- start content -->
	<div id="fh5co-main">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="fh5co-spacer fh5co-spacer-sm"></div>
					<p>
					<img src="{{asset('/')}}{{$about_img->content}}" alt="" class="img-rounded img-responsive" style="width: 100%;"></p>

					<p>{{$about_desc->content}}</p>
					
					
				</div>
				
        		
        	</div>
       </div>
	</div>
<!-- end content -->
@endsection