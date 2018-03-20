@extends('theme.bptheme1.layouts.app')
@section('content')
<div class="row main_bg">
	<div class="col-md-1"></div>
	<div class="col-md-10 asideleft">
		<div class="row">
			<div class="col-md-2 ">						
				@component('theme.bptheme1.sidebar') @endcomponent
			</div>
			<div class="col-md-10 asideright">
				@foreach($posts as $post)
						 
						 @if(App::getLocale() == 'mm')
						 	@if(isset($post->translate))
								@if($post->translate->lang == 2)
									@php $post = $post->translate; @endphp
								@endif
							@endif
						@endif
					<div class="col-md-12">
						
							<div class="row firstrow">
								<div class="col-md-10">
									<a href="{{url('/'.$post->post_link) }}" name="" ><h2>{{ $post->title }}</h2></a>
								</div>
								<div class="col-md-2"></div>
							</div>
							<div class="col-md-12 toolbar">
								<div class="col-md-10">
									{{ $post->body }}
								</div>
								<div class="col-md-2">
									
								</div>
							</div>
					</div>
				@endforeach
				<hr>
				{{ $posts->links() }}
			</div>

		</div>
	</div>
	<div class="col-md-1"></div>
</div>	
<div class="col-md-12"><br> </div>
@stop