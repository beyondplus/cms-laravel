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
            <!-- Optionally, you can add icons to the links -->

            <li class="treeview">
                <a href="#"><span>Post</span> <i class="fa fa-angle-right pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url("bp-admin/post/create")}}">Add Post</a></li>
                    <li><a href="{{ url("bp-admin/post")}}">Post</a></li>
                    <li><a href="{{ url("bp-admin/category")}}"><span>Category</span></a></li>
                    <li><a href="{{ url("bp-admin/tax")}}"><span>Taxonomy</span></a></li>
                </ul>
            </li>
            <li><a href="{{ url("bp-admin/page")}}"><span>Page</span></a></li>
            <li><a href="{{ url("bp-admin/media")}}"><span>Media</span></a></li>
            <li><a href="{{ url("bp-admin/menu")}}"><span>Menu</span></a></li>
            <li><a href="{{ url("bp-admin/user")}}"><span>User</span></a></li>
            <li><a href="{{ url("bp-admin/slider")}}"><span>Slider</span></a></li>
            <li class="treeview">
                <a href="#"><span>Settings</span> <i class="fa fa-angle-right pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url("bp-admin/generals")}}">Generals</a></li>
                    <li><a href="{{ url('bp-admin/account') }}">Account</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span>Custom</span> <i class="fa fa-angle-right pull-right"></i></a>
                <ul class="treeview-menu">
                    
                    <?php $menus = custom_menu() ?>
                    @foreach($menus as $menu)
                    <li><a href="{{ url("bp-admin/custom/".$menu['custom_link'])}}">{{ $menu['custom_name']}} </a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{ url("bp-admin/new")}}"><span>Add Custom</span></a></li>

         
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>