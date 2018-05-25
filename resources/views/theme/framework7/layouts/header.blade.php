<header>
    <nav>
    <!-- nav box -->
        <div class="row nav_box">
            <div class="col-sm-1"></div>
            <div class="col-sm-9 navs ">
                <ul class="nav nav-pills">
                   <li><a id="menu_home" href="{{url('/') }}">@lang('general.home')</a></li>
                   @foreach (bp_menu() as $menu)
                       @if(sizeof($menu->children)>0) 
                             <li class = "nav-item dropdown">
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
            <div class="col-sm-2">
                <?php // echo lang_dropdown(url('/')); ?>  
            </div>
        </div>
        <!-- nav box end -->
</nav>
    
</header>
