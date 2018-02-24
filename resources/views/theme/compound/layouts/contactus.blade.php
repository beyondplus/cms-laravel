@extends('theme.compound.layouts.app')
@section('content')


<div style="min-height:400px; padding-bottom:50px;">

	<section class="gray-section contact" id="contact">

<div class="container">

		<div class="row m-b-lg animated fadeInDown delayp1">

				<div class="col-lg-12 text-center">

						<div class="navy-line"></div>

						<h1>Contact Us</h1>

						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

				</div>

		</div>

		<div class="row m-b-lg ">

				<div class="col-lg-3 col-lg-offset-3 animated fadeInLeft delayp1">

						<address>

								<strong><span class="navy">Company name, Inc.</span></strong><br>

								No. 78, Room(6/B), Theingyi Street<br>

								Kyimyindine Township, Yangon, Myanmar<br>

								<abbr title="Phone">P:</abbr> 09 - 3133 0633, 4200 24194, 7996 37872 <br>
<abbr title="Email">E:</abbr> <a href="/cdn-cgi/l/email-protection#7715071b02041a0e16191a1605371f18031a161e1b5914181a" ><span class="__cf_email__" data-cfemail="d8baa8b4adabb5a1b9b6b5b9aa98b0b7acb5b9b1b4f6bbb7b5">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a>
						</address>

				</div>

				<div class="col-lg-4 animated fadeInRight delayp1">

						<p class="text-color">

							 Lorem Ipsum is simply dummy text of the printing and typesetting industry.. Aut eaque, totam corporis laboriosam veritatis quis ad perspiciatis, totam corporis laboriosam veritatis, consectetur adipisicing elit quos non quis ad perspiciatis, totam corporis ea,

						</p>

				</div>

		</div>



				<div class="row text-center">

						<div class="contact-form col-md-6 col-sm-12 col-xs-12 col-md-offset-3 animated fadeInUp delayp3" style="opacity: 0;">


								<ul class="parsley-error-list">


								</ul>

								<form class="form" action="{{ url('/contactus')}}"  method="post" enctype="multipart/form-data">
									
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<div class="form-group name">

												<label for="name" class="sr-only">Name</label>

												<input type="text" placeholder="Name:" class="form-control" name="name">

										</div><!--//form-group-->

										<div class="form-group email">

												<label for="email" class="sr-only">Email</label>

												<input type="text" placeholder="Email:" class="form-control" name="email">

										</div><!--//form-group-->

										<div class="form-group message">

												<label for="message" class="sr-only">Message</label>

												<textarea placeholder="Message:" rows="6" class="form-control" name="message"></textarea>

										</div><!--//form-group-->

										<button class="btn btn-sm btn-primary" type="submit">Send us mail</button>

								</form><!--//form-->

						</div><!--//contact-form-->

				</div><!--//row-->



		<div class="row">

				<div class="col-lg-12 text-center">



						<p class="m-t-sm">

								Or follow us on social platform

						</p>

						<ul class="list-inline social-icon">

								<li><a href="#"><i class="fa fa-twitter"></i></a>

								</li>

								<li><a href="#"><i class="fa fa-facebook"></i></a>

								</li>

								<li><a href="#"><i class="fa fa-linkedin"></i></a>

								</li>

						</ul>

				</div>

		</div>

		<div class="row">

				<div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg animated fadeInUp delayp1">

						<p><strong>&copy; {{ date('Y')}} Beyond Plus</strong><br> consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>

				</div>

		</div>

</div>

</section>
</div>



<div class="clr"></div>
@stop
