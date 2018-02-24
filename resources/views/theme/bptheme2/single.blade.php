@extends('theme.bptheme2.layouts.app')
@section('content')

	<div class="col-md-12 main_bg">
		<div class="col-md-1"></div>
		<div class="col-md-10 asideleft">
			<div class="col-md-2 ">
					
				<h4>CATEGORIES<hr></h4>
				
				<ul>
					@foreach($bp_cat as $cat)
					<a href="{{url('/cat/'.$cat->category_link) }}"><li>{{ $cat->category_name }}</li></a>
					@endforeach
				</ul>
			</div>
			<div class="col-md-10 asideright">
				@foreach($posts as $post)
				<div class="col-md-12">
					<div class="row firstrow">
						<div class="col-md-10">
							<a href="{{url('/'.$post->post_link) }}" name="" ><h2>{{ $post->title }}</h2></a>
							
							<!-- <img src="{{ asset("/public/uploads/".$post->pictures) }}" name="profile" class="img-responsive" /> -->
						</div>
						<div class="col-md-2"></div>
					</div>
					<div class="col-md-12 toolbar">
						<div class="col-md-10">
							
							{{$post->body}}
						</div>
						<div class="col-md-2">
							
						</div>
					</div>
				</div>
				<hr>
				
				</div>
			@endforeach
		</div>

		<div class="col-md-1"></div>

		
	</div>	
<div class="col-md-12"><br> </div>
@stop