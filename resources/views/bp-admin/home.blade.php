@extends('bp-admin.layouts.admin.index')
@section('content')
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>{{$totalPost}}</h3>

        <p>Total Post</p>
      </div>
      <div class="icon">
        <i class="ion ion-document-text"></i>
      </div>
      <a href="{{url('/bp-admin/post')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>53<sup style="font-size: 20px">%</sup></h3>

        <p>Bounce Rate</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>{{$allUser}}</h3>

        <p>User Registrations</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="{{url('/bp-admin/user')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>65</h3>

        <p>Unique Visitors</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<div class='row'>
  <div class='col-md-6'>
    <!-- Box -->


    <!-- PRODUCT LIST -->
    <div class="box box-danger">
      <div class="box-header with-border">

        <h3 class="box-title">Recently Posts</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        @foreach ($post as $p)
        <ul class="products-list product-list-in-box">
          <li class="item">
                  <!-- <div class="product-img">
                    <img src="{{ url('/img/dota.png')  }}" alt="Product Image">
                  </div> -->
                  <div class="product-info1">
                    <a href="{{ url('bp-admin/post/'.$p->id.'/edit') }}" class="product-title">{{$p->title}}
                      <span class="label label-warning pull-right">{{ $p->created_at->diffForHumans() }} </span></a>
                      <span class="product-description">
                        {{$p->body}}
                      </span>
                    </div>
                  </li>
                  @endforeach
                </ul>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="{{ url("bp-admin/post")}}" class="uppercase">View All Posts</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">Latest Members</h3>

                <div class="box-tools pull-right">

                  {{-- @foreach ($allUser as $userAll) --}}
                  {{-- expr --}}

                  <span class="label label-danger"> {{ $allUser }} New Admin </span>

                  {{--       @endforeach --}}

                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="box-body no-padding">
                <ul class="users-list clearfix">

                  @foreach($latestUser as $latestUsers )
                  <li>
                    <img src="{{ url('/img/avatar2.png')}}" alt="User Image" style="height:50px">
                    <a class="users-list-name" href="{{ url('bp-admin/user/'.$latestUsers->id.'/edit') }}">  {{ $latestUsers->name }} </a>
                    <span class="users-list-date">{{ $p->created_at->diffForHumans() }}</span>
                  </li>
                  @endforeach

                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <a href="{{ url("bp-admin/user")}}" class="uppercase">View All Users</a>
              </div>
            </div>

          </div><!-- /.row -->
          @endsection

          @push('scripts')
          <script>
            $(document).ready(function () {
            });
          </script>
          @endpush