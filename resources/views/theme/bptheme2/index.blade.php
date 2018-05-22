@extends('theme.bptheme2.layouts.app')

@section('content')
<section class=" slider has-pattern main_bg">

	<div class="container">
		<div class="row">
			<div class="col-sm-7 slidercontent">
				<div class="overview">
					<h2 class="title animated fadeInUp delayp1" >Theme 2</h2>
					<h4> Innovation Means Never Stop Learning </h4>

					<ul class="summary animated fadeInUp delayp2" style="opacity: 0;">
						<li><i class="fa fa-paint-brush"></i> Creative Web Design</li>
						<li><i class="fa fa-pencil"></i> PHP Web Development </li>
						<li><i class="fa fa-rocket"></i> Java SE Development</li>
						<li><i class="fa fa-android"></i> Android Development</li>
					</ul>
					{{-- <h4>* Trust our service</h4> --}}
					<div class="button fadeInUp delayp2">
						<a href="http://www.beyondplus.net/service" class="btn btn-lg btn-primary"><i class="fa fa-desktop"></i> Our Service </a>
						<a href="http://www.beyondplus.net/about-us" class="btn btn-lg btn-success"><i class="fa fa-desktop"></i> About Us </a>
					</div>
				</div>
			</div>

			<div class="col-sm-5">
				<div class="homeimage">
					<img src="{{ asset("/assets/bptheme2/img/homeimage.png") }}" alt="Home Image" class="img-responsive" />
					<p></p>
				</div>
			</div>
		</div>
	</div>

</section>
<div class="container">
	<div class="row">
		<div class="col-sm-8 posts">
			<div class="row">
			@foreach (bp_post(9) as $post)
				<div class="col-sm-4">
					<b><a href="{{url('/'.$post->post_link) }}" name="" >{{ $post->title }}</a></b><br>
					<span><i>Posted by {{ $post->creator->name}} | {{ $post->created_at->diffForHumans() }} </i> </span><br>
					<img src="{{ url('/uploads/'.$post->featured_img)}}" class="img-thumbnail">
				</div>
			@endforeach
			</div>
		</div>
		<div class="col-sm-4" >
			<div class="row">
				<div class="col-sm-12" style="border:1px solid #e2e2e2; padding:30px;">
					<form>
						<h3>Login Form</h3>
						<hr>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Check me out
							</label>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
			<div class="row">

				<div class="col-sm-12">
					<br>
					<img src="{{ url('/uploads/'.$post->featured_img)}}" class="img-thumbnail">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row main_goal">
	<div class="col-sm-1"></div>
	<div class="col-sm-10 listcontainer">
		<h2>Our Goal</h2>
		<hr>
		Today is Globalization so Marketing Strategies are changing to Digital World.
		Market places are also moving forward to Digital World.
	</div>
	<div class="col-sm-1"></div>
</div>


@stop

