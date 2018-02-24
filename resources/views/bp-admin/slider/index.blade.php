@extends('bp-admin.layouts.admin.index')

@section('title', 'Slider')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4>Show</h4>
                        </div>
                        <div class="col-sm-3 pull-right">
                            <a href="{{ url('bp-admin/slider/create') }}" class="btn btn-success  pull-right">
                                <i class="fa fa-user-plus"></i>
                                New
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table  class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Tittle</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($slider as $c)
                        <tr>
                            <td><img src="{{ url("public/uploads/".$c->slider_link)}}" alt="{{$c->slider_name}}"  height="100px"/></td>
                            <td>
                                <a href="#" name="" />{{$c->slider_name}}</a> <br>
                                <div class="col-sm-9"></div><div class="col-sm-3"> <a href="{{ url('bp-admin/slider/'. $c->slider_id.'/edit') }}" class="btn btn-xs btn-info">Edit</a>
                                    <a href="{{ url('bp-admin/slider/delete', [$c->slider_id]) }}" class="btn btn-delete btn-xs btn-danger">Delete</a>
                                </div>
                            </td>
                            
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pagination"> {{ $slider->links() }} </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@stop

@push('scripts')
    <script>
        $(document).ready(function () {
        });
    </script>
@endpush