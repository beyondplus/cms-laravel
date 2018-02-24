<header>
	<!-- <div style="background:#10a510">aa </div> -->
	<div class="container">
		<div class="navbar navbar-default ">
				<div class='col-md-12'>
				<div class='col-md-6'>
				<div class="navbar-header">
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="{{ url('/')}}" class="navbar-brand site-logo">
					<img src="{{ url('/assets/compound/img/logo.png') }}" class="img-responsive" height="70" alt="Beyond Plus"/>
					<span class="logo_title"> Beyond Plus </span>
					<span class="logo_subtitle">Professional IT Training and Service Centre</span>
					</a>

				</div>
			</div>

				<div class='col-md-6'>
					<div class='col-md-4'> <h4>Training Centre</h4><p>Get learn Modern IT Course and follow the update Technology.</p></div>
					<div class='col-md-4'> <h4>Service</h4><p>Create Awesome App with Beyond Plus and get the satified. </p></div>
					<div class='col-md-4'> <h4>Our Product</h4><p><a href='https://play.google.com/store/apps/details?id=com.beyondplusmyanmar.it.mystudent'>My Student</a>
											<br><a href='https://chrome.google.com/webstore/detail/developer-dashboard/lbkcekjeigdkikimangpepbhdekkomij?hl=en-GB' >Developer Dashboard</a>
											<br><a href="https://packagist.org/packages/beyondplus/cms">
												Beyond Plus CMS</a>
										</p></div>
				</div>
				</div>
			</div><!-- /container -->
		</div>
		<div style="background:#f5f5f5">
		<div class="navbar-collapse collapse" style="color:#b7afb8">

				 	  <ul class="nav navbar-nav navbar-collapse collapse navbar-right"  id="topmenu">
					 <li class="" >
			 	<a  href="{{ url('/')}}" class="active">
			 		<i class=""></i> <span> Home </span>
				</a>

					 @foreach (menu() as $menu)
							 @if(sizeof($menu->children)>0)
										 <li class = "dropdown">
														<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
															 {{ $menu->menu_name }}
															 <b class = "caret"></b>
														</a>
														<ul class = "dropdown-menu">
															@for ($i = 0; $i < sizeof($menu->children); $i++)
															<li>
																<!-- $post_link->find($menu->children[$i]->post_id)->post_link -->
																<a href = "{{url('/'.$menu->children[$i]->menu_link) }}">
																{{ $menu->children[$i]->menu_name }}</a>
															</li>
															 @endfor
														</ul>
											</li>
								@else
						<li><a id="menu_sport" href="{{url('/'.$menu->menu_link) }}">{{ $menu->menu_name }}</a></li>
								@endif
						@endforeach
							</li>
  </ul>
				</div><!--/nav-collapse -->
		</div>
</header>
