@extends('theme::bptheme2.layouts.app')

@section('content')
<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('public/img/slider/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            {{-- <div data-p="225.00">
                <img data-u="image" src="{{ asset('public/img/slider/red.jpg') }}" />
                <div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">TOUCH SWIPE SLIDER</div>
                <div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
                <div data-u="caption" data-t="0" style="position:absolute;top:120px;left:650px;width:470px;height:220px;z-index:0;">
                    <img style="position:absolute;top:0px;left:0px;width:470px;height:220px;z-index:0;" src="{{ asset('public/img/slider/c-phone-horizontal.png') }}" />
                    <div style="position:absolute;top:4px;left:45px;width:379px;height:213px;z-index:0; overflow:hidden;">
                        <img data-u="caption" data-t="1" style="position:absolute;top:0px;left:0px;width:379px;height:213px;z-index:0;" src="{{ asset('public/img/slider/c-slide-1.jpg') }}" />
                        <img data-u="caption" data-t="2" style="position:absolute;top:0px;left:379px;width:379px;height:213px;z-index:0;" src="{{ asset('public/img/slider/c-slide-3.jpg') }}" />
                    </div>
                    <img style="position:absolute;top:4px;left:45px;width:379px;height:213px;z-index:0;" src="{{ asset('public/img/slider/c-navigator-horizontal.png') }}" />
                    <img data-u="caption" data-t="3" style="position:absolute;top:740px;left:1600px;width:257px;height:300px;z-index:0;" src="{{ asset('public/img/slider/c-finger-pointing.png') }}" />
                </div>
            </div> --}}
            @foreach(bp_slider() as $slider)
            	<div data-p="225.00">
            		<img data-u="image" src="{{ asset('public/uploads/'.$slider->slider_link )}}" />
            		<div style="position:absolute;top:30px;left:30px;width:480px;height:120px;z-index:0;font-size:50px;color:#ffffff;line-height:60px;">{{ $slider->slider_name }}</div>
                	<div style="position:absolute;top:300px;left:30px;width:480px;height:120px;z-index:0;font-size:30px;color:#ffffff;line-height:38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
            	</div>
            @endforeach
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
	<div class="container listcontainer">
		@foreach (bp_post(9) as $post)
     		<div class="col-md-4">
      			<a href="{{url('/'.$post->post_link) }}" name="" class="col-md-12"><h4>{{ $post->title }}</h4></a>
      			<span class="col-md-6">{{ $post->creator->name}}</span>
      			<span class="col-md-6 text-right">{{ $post->created_at->diffForHumans() }}</span>
      			@if($post->featured_img != '')
      				{{-- <img src="{{ url('/public/uploads/'.$post->featured_img)}}" class="img-responsive" /> --}}
      			@else
    			<p class="col-md-12">{{  $post->body }}</p>
    			@endif
      		</div>
    	@endforeach
    </div>
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

@push('scripts')
	<script type="text/javascript">
		/** **/
	</script>
@endpush

