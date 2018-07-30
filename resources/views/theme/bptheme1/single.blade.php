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
				<div class="row">
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
							<div class="col-sm-2">
								@if(Auth::guard('admins')->check())
									@if($post->post_type == "post")
										<a href="{{url('/bp-admin/post/'.$post->id.'/edit') }}" name="" >Edit</a>
									@endif
								@endif
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<img src="{{url('/uploads/'.$post->featured_img)}}" class="img-thumbnail">
							</div>
							<div class="col-sm-10 html">
								{!! bbParse($post->body) !!}
							</div>
							<div class="col-sm-2">
								
							</div>
						</div>
					</div>	
				</div>
				@if(Auth::user())
					<div class="row">
						<div class="col-md-12 commentblk">
							<div class="row">
								<div class="col-md-1">
									@if( Auth::user()->avatar != "")
										<img src="{{  Auth::user()->avatar }}" name="profile" class="img-responsive" height="50px" />
									@else
										<img src="{{ asset("/img/blank_profile_pic_60x60.jpg") }}" name="profile" class="img-responsive" height="50px"  />
									@endif
									<br />
								</div>
								<div class="col-md-11">
									{{ csrf_field() }}
									<input type="text" class="form-control" id="comment" name="comment">
								</div>
							</div>
						</div>

					@if($post->comment)
						@foreach($post->comment as $c)	
							@if($c->users()->find($c->user_id))
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-1">
											@if($c->users()->find($c->user_id)->avatar != "")
												<img src="{{ $c->users()->find($c->user_id)->avatar }}" name="profile" class="img-responsive" height="50px"/>
											@else
												<img src="{{ asset("/assets/front/img/blank_profile_pic_60x60.jpg") }}" name="profile" class="img-responsive" height="50px"/>
											@endif
											<br />
										</div>
										<div class="col-md-11">
											<b>{{ $c->users()->find($c->user_id)->name }} : </b>
											{{ $c->body }}
											<br>
											{{$c->created_at->diffForHumans()}}
										</div>
								</div>
							</div>
							@endif		
						@endforeach
					@endif
					</div>
				@endif
			</div>
		</div>
	</div>
	<div class="col-sm-1"></div>
</div>	
<div class="col-sm-12"><br> </div>
@stop

@push('scripts')

<script type="text/javascript">
        $(document).ready(function(){
        $( "#comment" ).keypress(function(e) {
            var data = {'body':$('#comment').val(), '_token': $('input[name=_token]').val(), 'post_id': '{{ $post->id }}'};
            if (e.keyCode === 13){
            		$.ajax({
					     type: 'POST',
					     url: '{{ url('/comment') }}',
					     data: data,
					     beforeSend: function()
					     {
					         // alert('Fetching....');
					     },
					     success: function(returnData)
					     {
					         if(returnData == 1){
						      	 location.reload();
						      }
					     },
					     error: function()
					     {
					         // alert('Error');
					     },
					     complete: function()
					     {
					         // alert('Complete')
					     }
					 });
            }
            });
    });
</script>

@endpush