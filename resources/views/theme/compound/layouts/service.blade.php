@extends('theme.compound.layouts.app')
@section('content')

<div style="min-height:400px; padding-bottom:50px;">

			<div id="fb-root"></div>
<script>
<!-- (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk')); --></script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1665649180359782',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<section class="slider has-pattern" >
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<div class="overview">
				<h2 class="title animated fadeInUp delayp1" style="opacity: 0;">Beyond Plus helps you to build Web app</h2>
				<p> Just turn on your current mysql database into great application within minutes using Beyond Plus </p>
				<ul class="summary animated fadeInUp delayp2" style="opacity: 0;">
					<li><i class="fa fa-rocket"></i> Creative Web Design</li>
					<li><i class="fa fa-dot-circle-o"></i> Web Development </li>
					<li><i class="fa fa-rocket"></i> Internet Marketing</li>
					<li><i class="fa fa-thumbs-up"></i> Many Updates are comming soon..</li>
				</ul>
				<p>* Trust our service</p>
				<div class="button fadeInUp delayp2" >
					<a href="http://www.beyondplusmyanmar.com/service" class="btn btn-primary"><i class="fa fa-desktop"></i> Our Service </a>
					<a href="http://www.beyondplusmyanmar.com/about-us" class="btn btn-success"><i class="fa fa-desktop"></i> About Us </a>
				</div>
			</div>
		</div>

		<div class="col-md-5">
			<div class="laptop">
				<!-- <img src="url('/assets/compound/img/dashboard2.png" class="img-responsive" > -->
				<img src="{{ url('/assets/compound/img/dashboard1.png') }}" class="img-responsive" >
				<p class="text-center"> Fully Responsive Design <br />
				<i>Beyond Plus has been designed to work on all device variants </i>
				</p>
			</div>
		</div>
	</div>
</div>

</section>


<div class="social-buttons">
  <div class="container">
    <ul class="list-inline">
      <li class="follow-btn">

	  <a href="https://twitter.com/share" class="twitter-share-button" data-via="sximobuilder">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


      </li>
      <li><div class="fb-like" data-href="https://facebook.com/beyondpluscentre" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div></li>

    </ul>
  </div>
</div>

<section class="intro">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			<strong>CMS Package</strong> is not the standalone package, it is the add-on package. It can ONLY be added to any of the packages mentioned above. By buying CMS package, you’ll get username and password of your website and you will able to edit your website by yourself. If you don’t know how to edit your website, don’t worry! There is training on this.

			</div>
                         <div class="col-md-1"></div>
                         <div class="col-md-3">
                           <strong>  Website Hosting and Domain Selling </strong><br>
Web Hosting Package 23,000 ks per 1 year<br>
Web Domain Package 15,000 ks per 1 year<br>
                          </div>
		</div>
	</div>
</section>

<section class="basic-feature " id="">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">

				<h2><i class="fa fa-check-circle  text-success"></i> Website</h2>
				<p>Availiable on CMS, CMF and PHP Framework <strong></strong> . CMS is Fast and light weight </p>

			</div>
			<div class="col-sm-3">
				<h2><i class="fa fa-check-circle  text-danger"></i> Ecommerce</h2>
				<p>Commercial transactions conducted electronically on the Internet.</p>

			</div>
			<div class="col-sm-3">
				<h2><i class="fa fa-check-circle  text-warning"></i> ERP</h2>
				<p>ERP provides an integrated view of core business processes with a database management system.  </p>

			</div>
			<div class="col-sm-3">
				<h2><i class="fa fa-check-circle text-primary"></i> The Platform</h2>
				<p>Complete library to start your application both <strong>Frontend</strong> and <strong>Backend</strong> </p>

			</div>
		</div>
	</div>
</section>

<section class="features" id="features">
        <div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="navy-line"></div>
					<h3><span class="text-success"> Build With Our Service   !</span> </h3>
					<p> Everything you need for creating Web application  </p>
					<br /><br />
				</div>
			</div>

<div class="row">
        <div class="col-md-3 text-center">
            <div>
                <h1><i class="fa fa-paint-brush"></i></h1>
                <h3> Web Design </h3>
                <p>We use many technologies but commonly rely on hypertext and hypermedia resources including HTML, CSS and additional Web design tools</p>
            </div>
            <div class="m-t-lg">
                <h1><i class="fa fa-desktop"></i></h1>
                <h3>Web Development </h3>
                <p> Web content development, client-side/server-side scripting and network security configuration, among other tasks.</p>
            </div>
        </div>
        <div class="col-md-6 text-center">
			<img src="{{ url('/assets/compound/img/schema1.jpg') }}" class="img-responsive" >

        </div>
        <div class="col-md-3 text-center">
            <div>
                <h1><i class="fa fa-database"></i></h1>
                <h3>Hosting</h3>
                <p>This feature gives you the flexibility to retrieve data from the database by using the basic functions and syntax in MySQL as join, concat, distance etc.  </p>
            </div>
            <div class="m-t-lg">
                <h1><i class="fa fa-lock"></i></h1>
                <h3>Permission </h3>
                <p>control which groups are granted access to routine Curd </p>
            </div>
        </div>
    </div>
</div>
</section>
		</div>
@stop
