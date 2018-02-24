@extends('theme.bptheme2.layouts.app')

@section('content')
<section class="slider has-pattern main_bg">
<div class="container">
	<div class="row">
		<div class="col-md-12 slidercontent">
			<div class="homeimage">
				<ul class="bxslider">
				@foreach( $sliders as $slider )
					<li><a href="#"><img src="{{ asset("/public/uploads/".$slider->slider_link) }}" alt="{{ $slider->slider_name }}" ></a></li>
				@endforeach
				</ul>
			</div>	


			<!-- <div class="overview">
				<h2 class="title animated fadeInUp delayp1" >Waihlan</h2>
				<h5> Innovation Means Never Stop Learning </h5>
				<ul class="summary animated fadeInUp delayp2" style="opacity: 0;">
					<li><i class="fa fa-paint-brush"></i> Creative Web Design</li>
					<li><i class="fa fa-pencil"></i> PHP Web Development </li>
					<li><i class="fa fa-rocket"></i> Java SE Development</li>
					<li><i class="fa fa-android"></i> Android Development</li>
				</ul>
				<p>* Trust our service</p>
				<div class="button fadeInUp delayp2">
					<a href="http://www.beyondplusmyanmar.com/service" class="btn btn-primary"><i class="fa fa-desktop"></i> Our Service </a>
					<a href="http://www.beyondplusmyanmar.com/about-us" class="btn btn-success"><i class="fa fa-desktop"></i> About Us </a>
				</div>						
			</div>	 -->
		</div>
		
		<!-- <div class="col-md-5">
			<div class="homeimage">
				<ul class="bxslider">
					<li><a href="#"><img src="{{ asset("/assets/bptheme2/img/1.jpg") }}"></a></li>
					<li><a href="#"><img src="{{ asset("/assets/bptheme2/img/2.jpg") }}"></a></li>
					<li><a href="#"><img src="{{ asset("/assets/bptheme2/img/3.jpg") }}"></a></li>
					<li><a href="#"><img src="{{ asset("/assets/bptheme2/img/4.jpg") }}"></a></li>
					
				</ul>
			</div>	
		</div> -->
	</div>
</div>

</section>
	
	<!-- <div class="col-md-12 main_adv">
		<div class="col-md-1"></div>
		<div class="col-md-10 listcontainer">
				<div class="col-md-12">
					@foreach ($posts as $post)
			      <div class="list col-md-2">
			      	<a href="{{url('/'.$post->post_link) }}" name="" ><h2>{{ $post->title }}</h2></a>
			    	<p>{{  $post->body }}</p>
			      </div>
			      	@endforeach
			      
		        </div>
	  </div>
	  <div class="col-md-1"></div>
	</div> -->


	<div class="col-md-12 main_goal">
		<div class="col-md-1"></div>
		<div class="col-md-10 listcontainer">
				<div class="col-md-12">
					<h2>Our Goal</h2>
					<hr>
					Today is Globalization so Marketing Strategies are changing to Digital World.
					 Market places are also moving forward to Digital World. 
		        </div>
	  </div>
	  <div class="col-md-1"></div>
	</div>

@stop

