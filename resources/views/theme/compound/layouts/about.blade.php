@extends('theme.compound.layouts.app')
@section('content')

		<div style="min-height:400px; padding-bottom:50px;">

			<section class="story section has-pattern" id="story">
        <div class="container">
            <div class="row">
                <div class="content col-md-6 col-sm-6 col-xs-12 text-center animated fadeInLeft delayp1" style="opacity: 0;">
                    <h2 class="title">We are here to serve you</h2>

                    <p>
Beyond Plus specialises in building quality business websites that people are proud of by using our expertise in all areas of website design, development and Internet marketing.

Our passion for sending more visitors to your website and converting them into your customers is what we do the best.

</p>
                    <p>So contact us today if you need honest advice and want to reveal the new opportunity for your website. </p>
                </div><!--//content-->
                <div class="team col-md-5 col-sm-5 col-md-offset-1 col-sm-offset-1 col-xs-12">
                    <div class="row">
                        <div class="member col-md-6 text-center animated fadeInRight delayp2" style="opacity: 0;">
							<img src="{{ url ('assets/compound/img/team1.png') }}" class="img-rounded" >
                           <!--  <p class="name">James Norton</p>
                            <p class="title">Lead Developer</p>
                            <ul class="connect list-inline">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="row-end"><a href="#"><i class="fa fa-github"></i></a></li>
                            </ul> -->
                        </div><!--//member-->
                        <!-- <div class="member col-md-6 text-center animated fadeInRight delayp2" style="opacity: 0;">
							<img src="http://beyondplusmyanmar.com/sximo/themes/mango/img/team03.jpg" class="img-rounded" >
                            <p class="name">Steve Thomson</p>
                            <p class="title">UI/UX Designer</p>
                            <ul class="connect list-inline">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="row-end"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul> -->
                        </div><!--//member-->
                    </div>
                </div><!--//team-->
            </div><!--//row-->
        </div><!--//container-->
    </section>

	<section class="team" id="about">
<div class="container">
			<div class="row text-center">
				<h3 class="text-center">Who is Beyond Plus?</h3>

				<div class="col-md-3 team">
				<!--	<img height="90" width="90" src="sximo/themes/mango/img/team01.jpg" class="img-circle">  -->
				<h1><i class="fa fa-institution" ></i></h1>
					<h4>About the Company</h4>
				<!--	<h5><i>Founder & Product Manager</i></h5>  -->
					<p>Beyond Plus, based in Yangon, Myanmar (Burma), is founded by a young entrepreneur who is passionate about Web Design and Web Development.

It is formed with a group of talented designer and developers to serve creative and unique ideas for our local and overseas clients. </p>
				<!--	<p>
						<a href="index.html#"><i class="fa fa-facebook"></i></a>
						<a href="index.html#"><i class="fa fa-twitter"></i></a>
						<a href="index.html#"><i class="fa fa-envelope"></i></a>

					</p> -->
				</div>

				<div class="col-md-3 team">
					<h1><i class="fa fa-paper-plane-o"></i></h1>


					<h4>Our Company Mission</h4>
				<!--	<h5><i>Founder & Product Manager</i></h5>  -->
					<p>Our aim is to give our clients a one stop shop for all their online needs. </p>
				</div>

				<div class="col-md-3 team">
					<h1><i class="fa fa-paper-plane-o"></i></h1>
					<h4>The Philosophy</h4>
				<!--	<h5><i>Founder & Product Manager</i></h5>  -->
					<p>To identify your needs, fix the holes and transform your business as a result.</p>
				</div>
				<div class="col-md-3 team">
					<h1><i class="fa fa-thumbs-o-up"></i></h1>
					<h4>The Promise</h4>
				<!--	<h5><i>Founder & Product Manager</i></h5>  -->
					<p>We are dynamic and always keep ourselves up-to-date with web technologies and search industry to do an effective search engine marketing for our clients.  </p>
				</div>
			</div>
		</div>
		</section>
		</div>
		<div class="clr"></div>
@stop
