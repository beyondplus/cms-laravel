<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
          </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
        <li class="header">Admin</li>
        @foreach(slidebar() as $s)
            @if(Session::get('applocale') == "mm") 
                @php $s->module_name = $s->module_name_mm; @endphp
            @endif

            @if(count($s->child)>0)
                <li class="treeview">
                    <a href="{{ url("bp-admin/".$s->module_link)}}"><i class="{{$s->module_icon}}"></i> <span>{{$s->module_name}}</span> <i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="treeview-menu">

                        @if($s->module_link == 'post')
                            <li><a href="{{ url("bp-admin/".$s->module_link)}}">{{ $s->module_name }}</a></li>
                        @endif
                        @foreach($s->child as $c)
                            @if(Session::get('applocale') == "mm") 
                            @php $c->module_name = $c->module_name_mm; @endphp
                            @endif
                            <li><a href="{{ url("bp-admin/".$c->module_link)}}">{{ $c->module_name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li><a href="{{ url("bp-admin/".$s->module_link)}}"><i class="{{$s->module_icon}}"></i>  <span>{{$s->module_name}}</span></a></li>
            @endif
            
        @endforeach
        
        <li class="treeview">
            <a href="#"><i class="fa fa-files-o"></i> <span>@lang('backend.custom')</span> <i class="fa fa-angle-right pull-right"></i></a>
            <ul class="treeview-menu">

                @php $menus = custom_menu() @endphp
                @foreach($menus as $menu)
                <li><a href="{{ url("bp-admin/custom/".$menu['custom_link'])}}">{{ $menu['custom_name']}} </a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="{{ url("bp-admin/custom")}}"><i class="fa fa-files-o"></i> <span>@lang('backend.add-custom')</span></a></li>

    </ul><!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>