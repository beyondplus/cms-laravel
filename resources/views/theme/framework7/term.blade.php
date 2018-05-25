@extends('theme.bptheme2.layouts.app')
@section('content')
<div class="row main_bg">
	<div class="col-md-1"></div>
	<div class="col-md-10 asideleft">
		<div class="row">
			<div class="col-md-2 ">						
				<h4>CATEGORIES<hr></h4>
				<ul class="list-group">
					@foreach(bp_tax() as $tax)
					<a href="{{url('/cat/'.$tax->tax_link) }}"><li class="list-group-item">{{ $tax->tax_name }}</li></a>
					@endforeach
				</ul>
			</div>
			<div class="col-md-10 asideright">
				@foreach($terms as $t)
				<div class="col-md-12">
					<div class="row firstrow">
						<div class="col-md-10">
							<a href="{{url('/'.$t->post()->find($t->post_id)->post_link) }}" name="" ><h2>{{ $course_title = $t->post()->find($t->post_id)->title }}</h2></a>
						</div>
						<div class="col-md-2"></div>
					</div>
					<div class="col-md-12 toolbar">
						<div class="col-md-10">
							{{ $body = $t->post()->find($t->post_id)->body }}
						</div>
						<div class="col-md-2">
							
						</div>
					</div>
				</div>
				@endforeach
				<hr>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>	
<div class="col-md-12"><br> </div>
@stop