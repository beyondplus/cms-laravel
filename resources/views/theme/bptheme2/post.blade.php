@extends('theme.bptheme2.layouts.app')
@section('content')

	<div class="col-md-12 main_bg">
		<div class="col-md-1"></div>
		<div class="col-md-10 asideleft">
			<div class="col-md-2 ">
								
				<h4>CATEGORIES<hr></h4>
				
				<ul>
					@foreach($bp_cat as $category)
					<a href="{{url('/cat/'.$category->category_link) }}"><li>{{ $category->category_name }}</li></a>
					@endforeach
				</ul>
			</div>
			<div class="col-md-10 asideright">
					@foreach($term as $t)

				<div class="col-md-12">
					<div class="row firstrow">
						<div class="col-md-10">
							<a href="{{url('/'.$t->post()->find($t->post_id)->post_link) }}" name="" ><h2>{{ $course_title = $t->post()->find($t->post_id)->title }}</h2></a>
						</div>
						<div class="col-md-2"></div>
					</div>
					<div class="col-md-12 toolbar">
						<div class="col-md-10">
							{{ $course_title = $t->post()->find($t->post_id)->body }}
						</div>
						<div class="col-md-2">
							
						</div>
					</div>
				</div>
					@endforeach
				<hr>
				
				</div>
			
		</div>

		<div class="col-md-1"></div>

		
	</div>	
<div class="col-md-12"><br> </div>
@stop