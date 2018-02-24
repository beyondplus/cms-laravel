@extends('layouts.bptheme1.index')
@section('content')
	<div class="col-md-12 main_bg">
		<div class="col-md-1"></div>
		<div class="col-md-10 asideleft">
			<div class="col-md-2 ">
				
				
				<h4>CATEGORIES<hr></h4>
				
				<ul>
					<li>Web Desgin</li>
					<li>Web Development</li>
					<li>Android </li>
				</ul>
			</div>
			<div class="col-md-10 asideright">
				<div class="col-md-12">
					<h2>COURSES I AM TAKING </h2>
					<div class="col-md-12 toolbar">Sort by <select><option>Latest</option><option>Popularity</option>
					<option>Latest</option><option>Ending Soon</option><option>Budget</option></select>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row firstrow">
						<div class="col-md-10">
							<a href="#" >
								<h5>PHP Web Development Course</h5>
							</a>
						</div>
						<div class="col-md-2">
							Start Date<br>
							3-5-2016
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<div class="row">
								<div class="col-md-12">
								<img src="{{ asset("/assets/bptheme1/img/phpimages.jpg") }}" name="profile" class="img-responsive" />
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="col-md-11">
									<b>Web Development</b><br><br>PHP သည္ Server Side တစ္မ်ိဳးျဖစ္ျပီး လူူသုံးမ်ားေသာ language တစ္မိ်ဳးလည္း ျဖစ္ပါသည္။
								</div>
						</div>
						<div class="col-md-3 detail">
							<button type="button" class="btn btn-default detail" >View Details</button>
						</div>
					</div>
				</div>
				<hr>
				
				</div>
			
		</div>
		<div class="col-md-1"></div>

		
	</div>	
<div class="col-md-12"><br> </div>
@stop

