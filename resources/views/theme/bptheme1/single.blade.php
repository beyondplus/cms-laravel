@extends('theme.bptheme1.layouts.app')
@section('content')
<div class="row main_bg">
	<div class="col-sm-1"></div>
	<div class="col-sm-10 asideleft">
		<div class="row">
			<div class="col-sm-2 ">	
				@component('theme.bptheme1.sidebar') @endcomponent
			</div>
			<div class="col-sm-10 asideright">
				<div class="col-sm-12">
					@if(App::getLocale() == 'mm')
						@if(isset($post->translate))
							@if($post->translate->lang == 2)
								@php $post = $post->translate; @endphp
							@endif
						@endif
					@endif
					<div class="row firstrow">
						<div class="col-sm-10">
							<a href="{{url('/'.$post->post_link) }}" name="" ><h2>{{ $post->title }}</h2></a>
						</div>
						<div class="col-sm-2"></div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<img src="{{url('/uploads/'.$post->featured_img)}}" class="img-thumbnail">
						</div>
						<div class="col-sm-10 html">
							{!! $post->body !!}
						</div>
						<div class="col-sm-2">
							
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<div class="col-sm-1"></div>
</div>	
<div class="col-sm-12"><br> </div>
@stop

@push('scripts')

<script type="text/javascript">
        // alert("test");
    </script>

    @endpush