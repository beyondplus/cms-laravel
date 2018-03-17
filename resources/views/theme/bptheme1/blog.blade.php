{{-- this is a blog template --}}
@extends('theme.bptheme1.layouts.app')
@section('content')
<div class="row main_bg">
	<div class="col-sm-1"></div>
	<div class="col-sm-10 asideleft">
		<div class="row">
			<div class="col-sm-2 ">	
				<h4>CATEGORIES<hr></h4>		
				<ul>
					@foreach(bp_tax() as $category)
					<a href="{{url('/cat/'.$category->tax_link) }}"><li class="list-group-item">{{ $category->tax_name }} </li></a>
					@endforeach
				</ul>
			</div>
			<div class="col-sm-10 asideright">
				@foreach(bp_post(10) as $post)
				<div class="col-sm-12">
					<div class="row firstrow">
						<div class="col-sm-10">
							<a href="{{url('/'.$post->post_link) }}" name="" ><h2>{{ $post->title }}</h2></a>
						</div>
						<div class="col-sm-2"></div>
					</div>
					<div class="col-sm-12 toolbar">
						<div class="col-sm-10 html">
							{{ $post->body }}
						</div>
						<div class="col-sm-2">
							
						</div>
					</div>
				</div>
				<hr>		
				@endforeach
			</div>
		</div>
	</div>
	<div class="col-sm-1"></div>
</div>	
<div class="col-sm-12"><br> </div>
@stop

@push('scripts')

<script type="text/javascript">
	var mark = $('.html').html();
	var result = marked(mark);
	$('.html').html(result);
</script>

@endpush