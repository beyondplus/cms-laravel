<header>
  <div class="container">
        <div class="col-md-7">
            <div class="overview">
                <h2 >Beyond Plus CMS</h2>
                <h5> Innovation Means Never Stop Learning </h5>
            </div>
        </div>
        <div class="col-md-5">
        </div>
</div>
    <nav>
    <!-- nav box -->
        <div class="col-md-12 nav_box">
            <div class="col-md-7"></div>
            <div class="col-md-5 navs  ">
                <ul class="nav nav-pills">
                   <li><a id="menu_home" href="{{url('/') }}">HOME</a></li>
                   @foreach (bp_menu() as $menu)
                       @if(sizeof($menu->children)>0) 
                             <li class = "dropdown">
                                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                                       {{ $menu->menu_name }}
                                       <b class = "caret"></b>
                                    </a>
                                    <ul class = "dropdown-menu">
                                      @foreach ($menu->children as $sub)
                                        <li>  
                                          @if($sub->menu_type == 'default')
                                            <a href = "{{url('/'.$sub->menu_link) }}">
                                          @else
                                            <a href = "{{$sub->menu_link}}">
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
            <div class="col-md-1">
                             
            </div>
        </div>
        <!-- nav box end -->
</nav>
    
</header>
