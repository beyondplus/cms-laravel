{{-- this is a blog template --}}
@extends('theme::bptheme2.layouts.app')
@section('content')
	<div class="col-md-12 main_bg">
		<div class="col-md-1"></div>
		<div class="col-md-10 asideleft">
			<div class="col-md-2 ">	
				<h4>CATEGORIES<hr></h4>		
				<ul>
					@foreach(bp_cat() as $category)
				 		<a href="{{url('/cat/'.$category->category_link) }}"><li class="list-group-item">{{ $category->category_name }} <span class="badge">12</span></li></a>
				 	@endforeach
				</ul>
			</div>
			<div class="col-md-10 asideright">
				@foreach(bp_post(10) as $post)
					<div class="col-md-12">
						<div class="row firstrow">
							<div class="col-md-10">
								<a href="{{url('/'.$post->post_link) }}" name="" ><h2>{{ $post->title }}</h2></a>
							</div>
							<div class="col-md-2"></div>
						</div>
						<div class="col-md-12 toolbar">
							<div class="col-md-10 html">
								{{ $post->body }}
							</div>
							<div class="col-md-2">
								
							</div>
						</div>
					</div>
					<hr>		
				@endforeach
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>	
<div class="col-md-12"><br> </div>
@stop

@push('scripts')

	<script type="text/javascript">
        var mark = $('.html').html();
        var result = marked(mark);
        $('.html').html(result);
    </script>

@endpush