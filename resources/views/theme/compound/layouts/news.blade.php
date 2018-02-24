@extends('theme.compound.layouts.app')
@section('content')
<div class="container">

<div class="row">

		<div class="col-md-3 ">
              <img src="{{ url('assets/compound/img/upgradetheskill.jpg') }}"  alt="ads"  class="img-responsive" />
		</div>
		<div class="col-md-9">
			<div id="accordion" class="panel-group">
							@foreach(news() as $new)
								<h3><a href="{{ url("bp-admin/custom/".$new['title'])}}" name=""/>{{ $new['title']}}</a></h3><br>
				<p>{{ $new['body']}}</p>
				<span> Time: <i>{{ date('F d, Y h:i A', strtotime($new['created_date']) )}} </i></span>
								@endforeach

							</div>
		</div>

	</div>

</div>			</div>

		<div class="clr"></div>

@stop
