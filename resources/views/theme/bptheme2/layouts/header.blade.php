<header>
    <nav>
    <!-- nav box -->
        <div class="col-md-12 nav_box">
            <div class="col-md-1"></div>
            <div class="col-md-9 navs ">
                <div class="col-md-12">
                  <br>
                  
                <ul class="nav nav-pills">
                  <!-- <li id="home"><a id="menu_index" href="javascript:" onclick="SwitchSport('in');"><img width="24" height="22" src="assets/img/home_icon.png"></a></li> -->
                   <li><a id="menu_sport" href="{{url('/') }}">HOME</a></li>
                   @foreach ($menus as $menu)
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
                </ul>
                </div>
            </div>
            <div class="col-md-2">
                             
            </div>
        </div>
        <!-- nav box end -->
</nav>
    
</header>
