@extends('theme.compound.layouts.app')
@section('content')

		<div style="min-height:400px; padding-bottom:50px;">

			<script>
$(function(){
	$('.mix-grid').mixitup();

	$('.fancybox-thumbs').fancybox({
		prevEffect : 'none',
		nextEffect : 'none',

		closeBtn  : false,
		arrows    : false,
		nextClick : true,

		helpers : {
			thumbs : {
				width  : 50,
				height : 50
			}}
	});

});
</script>

<div class="wrapper-header ">
    <div class="container">
		<div class="col-sm-6 col-xs-6">
		  <div class="page-title">
			<h3> Portpolio <small> View Our works Galleries </small></h3>
		  </div>
		</div>
		<div class="col-sm-6 col-xs-6 ">
		  <ul class="breadcrumb pull-right">
			<li><a href="http://beyondplusmyanmar.com/">Home</a></li>
			<li class="active">Service Page </li>
		  </ul>
		</div>

    </div>
</div>

<div class="container">


<ul class="mix-filter">
		<li class="filter active" data-filter="all">All</li>
				<li class="filter" data-filter="1-img">Ui Design</li>
				<li class="filter" data-filter="2-img">Web Development</li>
				<li class="filter" data-filter="3-img">Photographys</li>
				<li class="filter" data-filter="4-img">Application</li>
				<li class="filter" data-filter="5-img">Extension</li>

	</ul>

	<div class="row mix-grid thumbnails" >
					<div class="col-md-3 col-sm-3 mix 1-img">
					<img src="{{ url('assets/compound/img/portpolio/app/3.jpg') }}" class="img-responsive" />
					<div class="mix-details">
					<h4> Image 6</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/app/3.jpg') }}" title="Image 6" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 1-img">

					<img src="{{ url('assets/compound/img/portpolio/app/2.jpg') }}" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 1</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/app/2.jpg') }}" title="Image 1" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 1-img">

					<img src="{{ url('assets/compound/img/portpolio/app/1.jpg') }}" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 2</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/app/1.jpg') }}" title="Image 2" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 2-img">

					<img src="{{ url('assets/compound/img/portpolio/card/1.jp') }}g" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 3</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/card/1.jp') }}g"
					title="Image 3" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 2-img">
					<img src="{{ url('assets/compound/img/portpolio/card/2.jp') }}g" class="img-responsive" />
					<div class="mix-details">
					<h4> Image 4</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/card/2.jp') }}g" title="Image 4" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 2-img">
					<img src="{{ url('assets/compound/img/portpolio/card/3.jp') }}g" class="img-responsive" />
					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/card/3.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>

					<div class="col-md-3 col-sm-3 mix 2-img">
					<img src="{{ url('assets/compound/img/portpolio/card/4.jp') }}g" class="img-responsive" />
					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/card/4.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>

					<div class="col-md-3 col-sm-3 mix 3-img">

					<img src="{{ url('assets/compound/img/portpolio/icon/1.jp') }}g" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/card/1.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 3-img">

					<img src="{{ url('assets/compound/img/portpolio/icon/2.jp') }}g" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/card/2.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 3-img">

					<img src="{{ url('assets/compound/img/portpolio/icon/3.jp') }}g" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/card/3.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 3-img">

					<img src="{{ url('assets/compound/img/portpolio/icon/4.jp') }}g" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/card/4.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>

					<div class="col-md-3 col-sm-3 mix 3-img">

					<img src="{{ url('assets/compound/img/portpolio/icon/5.jp') }}g" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/card/5.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 4-img">

					<img src="{{ url('assets/compound/img/portpolio/logo/1.jp') }}g" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/logo/1.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 4-img">

					<img src="{{ url('assets/compound/img/portpolio/logo/2.jp') }}g" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/logo/2.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 4-img">

					<img src="{{ url('assets/compound/img/portpolio/logo/3.jp') }}g" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/logo/3.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 4-img">

					<img src="{{ url('assets/compound/img/portpolio/logo/4.jp') }}g" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/logo/4.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>


					<div class="col-md-3 col-sm-3 mix 4-img">

					<img src="{{ url('assets/compound/img/portpolio/logo/5.jp') }}g" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/logo/5.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 4-img">

					<img src="{{ url('assets/compound/img/portpolio/logo/6.jp') }}g" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/logo/6.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 4-img">

					<img src="{{ url('assets/compound/img/portpolio/logo/7.jp') }}g" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/logo/7.jp') }}g" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>

					<div class="col-md-3 col-sm-3 mix 5-img">

					<img src="{{ url('assets/compound/img/portpolio/web/1.jpg') }}" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/web/1.jpg') }}" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>

					<div class="col-md-3 col-sm-3 mix 5-img">

					<img src="{{ url('assets/compound/img/portpolio/web/2.jpg') }}" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/web/2.jpg') }}" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 5-img">

					<img src="{{ url('assets/compound/img/portpolio/web/3.jpg') }}" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/web/3.jpg') }}" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>
					<div class="col-md-3 col-sm-3 mix 5-img">

					<img src="{{ url('assets/compound/img/portpolio/web/4.jpg') }}" class="img-responsive" />

					<div class="mix-details">
					<h4> Image 5</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					<a class="mix-link"><i class="fa fa-link"></i></a>
					<a class="mix-preview fancybox-thumbs" href="{{ url('assets/compound/img/portpolio/web/4.jpg') }}" title="Image 5" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
					</div>

			</div>

</div>
</div>


		</div>



		<div class="clr"></div>

@stop
