@extends('theme.bptheme1.layouts.app')

@section('content')

<section class=" slider has-pattern main_bg">
	
	<div class="container">
		<div class="row">
			<div class="col-sm-7 slidercontent">
				<div class="overview">
					<h2 class="title animated fadeInUp delayp1" >Beyond Plus CMS</h2>
					<h4> Innovation Means Never Stop Learning </h4>

					<ul class="summary animated fadeInUp delayp2" style="opacity: 0;">
						<li><i class="fa fa-paint-brush"></i> Creative Web Design</li>
						<li><i class="fa fa-pencil"></i> PHP Web Development </li>
						<li><i class="fa fa-rocket"></i> Java SE Development</li>
						<li><i class="fa fa-android"></i> Android Development</li>
					</ul>

					<div class="button fadeInUp delayp2">
						<a href="http://www.beyondplus.net/service" class="btn btn-lg btn-primary"><i class="fa fa-desktop"></i> Our Service </a>
						<a href="{{url('/bp-admin')}}" class="btn btn-lg btn-success"><i class="fa fa-desktop"></i> Login </a>
					</div>
				</div>
			</div>

			<div class="col-sm-5">
				<div class="homeimage">
					<img src="{{ asset("/assets/bptheme1/img/homeimage.png") }}" alt="Home Image" class="img-responsive" />
					<p></p>
				</div>
			</div>
		</div>
	</div>

</section>
<div class="container">
	<div class="row text-center">	
		<div class="col-md-12">
				<h2>Featured Posts</h2>
			<hr>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12 posts">
			<div class="row">
				@foreach (bp_post(8) as $post)
				<div class="col-lg-3 col-sm-6 portfolio-item mb-4">
					@if(App::getLocale() == 'mm')
						@if(isset($post->translate))
							@if($post->translate->lang == 2)
								@php $post = $post->translate; @endphp
							@endif
						@endif
					@endif
		          <div class="card h-100">
		            <a href="{{url('/'.$post->post_link) }}"><img src="{{ url('/uploads/'.$post->featured_img)}}" class="img-thumbnail">
		            </a>
		            <div class="card-body">
		              <h4 class="card-title">
		                <a href="{{url('/'.$post->post_link) }}" name="" >{{ $post->title }}</a>
		              </h4>
		              <p class="card-text">
		              {{ str_replace("&nbsp;","",mb_strimwidth(strip_tags($post->body), 0, 150, "...")) }}
		              </p>
		            </div>
		            <div class="card-footer text-right">
						<span><i>By {{ $post->creator->name}} | {{ $post->created_at->diffForHumans() }} </i> </span>
					</div>
		          </div>
		        </div>
				@endforeach
			</div>
		</div>
		
	</div>
</div>
<section class="call-to-action text-white text-center main_goal">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <h2 class="mb-4">Ready to get started? Sign up now!</h2>
      </div>
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form>
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
              <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
            </div>
            <div class="col-12 col-md-3">
              <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@stop

