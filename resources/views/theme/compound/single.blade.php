@extends('theme.compound.layouts.app')
@section('content')
<section>
		<div class="col-md-1"></div>
		<div class="col-md-10 ">
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
				<div id="accordion" class="panel-group">
					<h3>
							<a href="{{url('/'.$post->post_link) }}" name="" >{{ $post->title }}</a>

							<!-- <img src="{{ asset("/public/uploads/".$post->pictures) }}" name="profile" class="img-responsive" /> -->
					</h3>
					<p>

							{{$post->body}}
					</p>
				</div>
				<hr>

				</div>
			@endforeach
		</div>
		<div class="col-md-1"></div>
<div class="col-md-12"><br> </div>
</section>
@stop
