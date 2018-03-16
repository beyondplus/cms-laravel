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
        <li ><a href="{{url('/bp-admin')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <!-- Optionally, you can add icons to the links -->

        <li class="treeview">
            <a href="#"><i class="fa fa-edit"></i> <span>Post</span> <i class="fa fa-angle-right pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ url("bp-admin/post/create")}}">Add Post</a></li>
                <li><a href="{{ url("bp-admin/post")}}">Post</a></li>
                <li><a href="{{ url("bp-admin/category")}}"><span>Category</span></a></li>
                <li><a href="{{ url("bp-admin/tax")}}"><span>Taxonomy</span></a></li>
            </ul>
        </li>
        <li><a href="{{ url("bp-admin/page")}}"><i class="fa fa-edit"></i> <span>Page</span></a></li>
        <li><a href="{{ url("bp-admin/media")}}"><i class="fa fa-th"></i> <span>Media</span></a></li>
        <li><a href="{{ url("bp-admin/menu")}}"><i class="fa fa-edit"></i> <span>Menu</span></a></li>
        <li><a href="{{ url("bp-admin/user")}}"><i class="fa fa-user"></i> <span>User</span></a></li>
        <li><a href="{{ url("bp-admin/slider")}}"><i class="fa fa-image"></i>  <span>Slider</span></a></li>
        <li class="treeview">
            <a href="#"><i class="fa fa-cog"></i> <span>Settings</span> <i class="fa fa-angle-right pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ url("bp-admin/general")}}">Generals</a></li>
                <li><a href="{{ url('bp-admin/account') }}">Account</a></li>
                <li><a href="{{ url('bp-admin/permisson') }}">Permission</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-files-o"></i> <span>Custom</span> <i class="fa fa-angle-right pull-right"></i></a>
            <ul class="treeview-menu">

                @php $menus = custom_menu() @endphp
                @foreach($menus as $menu)
                <li><a href="{{ url("bp-admin/custom/".$menu['custom_link'])}}">{{ $menu['custom_name']}} </a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="{{ url("bp-admin/new")}}"><i class="fa fa-files-o"></i> <span>Add Custom</span></a></li>


    </ul><!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>