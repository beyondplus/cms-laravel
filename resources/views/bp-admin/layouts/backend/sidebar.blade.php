<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <a href="{{ url('dashboard/') }}"><img src="{{ asset('/img/logo/logo.png') }}" class="img-circle" alt="User Image" /></a>
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

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
            <li class="header">Information</li>
            <!-- Optionally, you can add icons to the links -->

            
  <!--           <li><a href="{{ url("dashboard/product")}}"><span>Product</span></a></li> -->
            <li><a href="{{ url("dashboard/profile")}}"><span>Profile</span></a></li>
            <li><a href="{{ url("dashboard/bet")}}"><span>Betting</span></a></li>
           <!--  <li><a href="{{ url("dashboard/category")}}"><span>Clients</span></a></li> -->
            <li><a href="#"><span>Another Link</span></a></li>
            <li class="treeview">
                <a href="#"><span>Multilevel</span> <i class="fa fa-angle-right pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>