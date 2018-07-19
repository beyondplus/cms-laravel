<header>
<nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">
    <div class="col-xs-2 col-md-2">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">☰</button> 
      <a class="navbar-brand" href="#">Beyond Plus CMS</a>
      
    </div>
    <div class="col-xs-7  col-md-7 navs">
      <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">@lang('general.home') <span class="sr-only">(current)</span></a>
              </li>
              @foreach (bp_menu() as $menu)

            
                 @if(sizeof($menu->children)>0) 
                    @php $children = $menu->children @endphp
                    @if(App::getLocale() == 'mm')
                      @if(isset($menu->translate))
                        @if($menu->translate->lang == 2)
                          @php $menu = $menu->translate; @endphp
                        @endif
                      @endif
                    @endif
                       <li class = "nav-item dropdown">
                              <a href = "#" class = "nav-link dropdown-toggle" data-toggle = "dropdown" aria-haspopup="true" aria-expanded="false">
                                 {{ $menu->menu_name }}
                                 <b class = "caret"></b>
                              </a>
                              <ul class = "dropdown-menu">
                                @foreach ($children as $sub)
                                  @if(App::getLocale() == 'mm')
                                    @if(isset($sub->translate))
                                      @if($sub->translate->lang == 2)
                                        @php $sub = $sub->translate; @endphp
                                      @endif
                                    @endif
                                  @endif
                                  <li>  
                                    @if($sub->menu_type == 'default')
                                      <a href = "{{url('/'.$sub->menu_link) }}" class="dropdown-item">
                                    @else
                                      <a href = "{{$sub->menu_link}}" class="dropdown-item">
                                    @endif
                                    {{ $sub->menu_name }}</a>
                                  </li>
                                 @endforeach
                              </ul>
                        </li>      
                  @else
              <li>
                    @if($menu->menu_type == 'default')
                        <a href = "{{url('/'.$menu->menu_link) }}">
                    @else
                        <a href = "{{$menu->menu_link}}">
                    @endif
                      {{ $menu->menu_name }}</a>
              </li>  
                  @endif
              @endforeach
            </ul>
          <!-- <ul class="nav navbar-nav ml-auto">
              <li class="nav-item active"> <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="#">Link 1</a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="#">Link 2</a>
              </li>
              <li class="nav-item"> <a class="nav-link" href="#">Link 3</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                  </div>
              </li>
          </ul> -->
      </div>
    </div>
    <div class="col-xs-3 col-md-2">
        
        <?php echo lang_dropdown(url('/')); ?>  
          @if (Auth::check())
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                  </ul>
              </li>
          @else
              <a href="{{url('/login')}}">Login</a> | <a href="{{url('/register')}}">Register</a>
          @endif
    </div>
</nav>


    <nav>
   
    <!--     <div class="row nav_box">
            <div class="col-sm-2"><a class="navbar-brand" href="#">Beyond Plus CMS</a></div>
            <div class="col-sm-8 navs ">
                <nav class="navbar navbar-expand-sm">
                  

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">@lang('general.home') <span class="sr-only">(current)</span></a>
                      </li>
                      @foreach (bp_menu() as $menu)

                    
                         @if(sizeof($menu->children)>0) 
                            @php $children = $menu->children @endphp
                            @if(App::getLocale() == 'mm')
                              @if(isset($menu->translate))
                                @if($menu->translate->lang == 2)
                                  @php $menu = $menu->translate; @endphp
                                @endif
                              @endif
                            @endif
                               <li class = "nav-item dropdown">
                                      <a href = "#" class = "nav-link dropdown-toggle" data-toggle = "dropdown" aria-haspopup="true" aria-expanded="false">
                                         {{ $menu->menu_name }}
                                         <b class = "caret"></b>
                                      </a>
                                      <ul class = "dropdown-menu">
                                        @foreach ($children as $sub)
                                          @if(App::getLocale() == 'mm')
                                            @if(isset($sub->translate))
                                              @if($sub->translate->lang == 2)
                                                @php $sub = $sub->translate; @endphp
                                              @endif
                                            @endif
                                          @endif
                                          <li>  
                                            @if($sub->menu_type == 'default')
                                              <a href = "{{url('/'.$sub->menu_link) }}" class="dropdown-item">
                                            @else
                                              <a href = "{{$sub->menu_link}}" class="dropdown-item">
                                            @endif
                                            {{ $sub->menu_name }}</a>
                                          </li>
                                         @endforeach
                                      </ul>
                                </li>      
                          @else
                      <li>
                            @if($menu->menu_type == 'default')
                                <a href = "{{url('/'.$menu->menu_link) }}">
                            @else
                                <a href = "{{$menu->menu_link}}">
                            @endif
                              {{ $menu->menu_name }}</a>
                      </li>  
                          @endif
                      @endforeach
                    </ul>
                  </div>
                </nav>
                
            </div>
            <div class="col-sm-2">
                <?php //echo lang_dropdown(url('/')); ?>  
                @if (Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @else
                    <a href="{{url('/login')}}">Login</a> | <a href="{{url('/register')}}">Register</a>
                @endif
            </div>
        </div> -->
        <!-- nav box end -->
</nav>
    
