@extends('theme.compound.layouts.app')

@section('content')
<section class="slider has-pattern">
<div class="container">
	<div class="row">
		<div class="col-md-7">
			<div class="overview">
				<h2 class="title animated fadeInUp delayp1" style="opacity: 0;">Beyond Plus Professional Training Centre</h2>
				<p> Upgrade the Skills , Get the Goals </p>
				<ul class="summary animated fadeInUp delayp2" style="opacity: 0;">
					<li><i class="fa fa-paint-brush"></i> Creative Web Design</li>
					<li><i class="fa fa-pencil"></i> PHP Web Development </li>
					<li><i class="fa fa-rocket"></i> Java SE Development</li>
					<li><i class="fa fa-android"></i> Android Development</li>
				</ul>
				<p>* Trust our service</p>
				<div class="button fadeInUp delayp2">
					<a href="{{ url('/service') }}" class="btn btn-primary"><i class="fa fa-desktop"></i> Our Service </a>
					<a href="{{ url('/about') }}" class="btn btn-success"><i class="fa fa-desktop"></i> About Us </a>
				</div>
			</div>
		</div>

		<div class="col-md-5">
			<div class="laptop">
				<img src="{{ url('assets/compound/img/word-cloud.png') }}" class="img-responsive">
				<!-- <p class="text-center"> Fully Responsive Design <br />
				<i>Beyond Plus has been designed to work on all device variants </i> -->
				<p></p>
			</div>
		</div>
	</div>
</div>

</section>

<div class="social-buttons">
  <div class="container">
    <ul class="list-inline">
      <li class="follow-btn">

	  <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="./Beyond Plus_files/tweet_button.d73d0c4cb6af3df0ea22b7c11dbc87d2.en.html" style="position: static; visibility: visible; width: 60px; height: 20px;"></iframe>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


      </li>
      <li><div class="fb-like fb_iframe_widget" data-href="https://facebook.com/beyondpluscentre" data-layout="standard" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=1665649180359782&amp;container_width=0&amp;href=https%3A%2F%2Ffacebook.com%2Fbeyondpluscentre&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 450px; height: 56px;"><iframe name="f2d75ba218bad6c" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="" style="border: none; visibility: visible; width: 450px; height: 56px;" class=""></iframe></span></div></li>

    </ul>
  </div>
</div>

<section class="intro">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
<div class="col-md-12">
			<a href="http://www.beyondplusmyanmar.com/" name="Beyond Plus"><strong>Welcome to Beyond Plus Training Centre</strong></a> <br>
			Beyond Plus Training Centre compounded professional IT Masters. They are teaching at Weekend Days. Other days, teachers are doing the projects so don't worry about our experiences.  <br>
</div><div class="col-md-12">
<br>
<a href="{{ url('/') }}" name="My Student App"><strong> Advanced Web Development Course </strong></a><br>
<p style="font-size:14px">
This course aimed to become the professional developer<br>
- Control the everything from Web Based<br>
- Sever Security Configuration <br>
- Creating Automation System <br>
- Awasome Dynamic Frontend <br>
- Security Web Development <br>
</p>
<i>Who want to become the professional in Web Development?</i>
</div>
			</div>
                       <div class="col-md-4">
                       	<img src="{{ url('assets/compound/img/Advancedwebdevelopment.jpg') }}" class="img-responsive"/>
                       	
</div>
		</div>
	</div>
</section>

<section class="basic-feature " id="">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">

				<h1><i class="fa fa-check-circle  text-success"></i> Website Design</h1>
				<p>We use many technologies but commonly rely on hypertext and hypermedia resources including HTML, CSS and additional Web design tools </p>

			</div>
			<div class="col-sm-3">
				<h1><i class="fa fa-check-circle  text-danger"></i> Website Development</h1>
				<p>Web content development, Server-side scripting and network security configuration, among other tasks.</p>

			</div>
			<div class="col-sm-3">
				<h1><i class="fa fa-check-circle  text-warning"></i> Java SE Development</h1>
				<p>Foundatation of Java , creating java desktop application </p>

			</div>
			<div class="col-sm-3">
				<h1><i class="fa fa-check-circle text-primary"></i> Android Development</h1>
				<p>Building the Android APP base on android phone platform .  </p>

			</div>
		</div>
	</div>
</section>
</div>
		<div class="clr"></div>
@stop
