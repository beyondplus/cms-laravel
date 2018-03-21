<header>
    <nav>
    <!-- nav box -->
        <div class="row nav_box">
            <div class="col-sm-2"><a class="navbar-brand" href="#">Beyond Plus CMS</a></div>
            <div class="col-sm-8 navs ">
                <nav class="navbar navbar-expand-sm">
                  

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
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
                <?php echo lang_dropdown(url('/')); ?>  
            </div>
        </div>
        <!-- nav box end -->
</nav>
    
</header>
