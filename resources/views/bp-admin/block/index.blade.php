@extends('bp-admin.layouts.admin.index')

@section('title', 'Block')

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
                            <a href="{{ url('bp-admin/block/create') }}" class="btn btn-success  pull-right">
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
                            <th>Short Code</th>
                            <th>Name</th>
                            <th>Languague</th>
                            <th>Active</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($block as $c)
                        <tr>
                            <td>[block]{{$c->id}}[/block] (or) showBlock({{$c->id}})</td>
                            <td>
                                <a href="{{ url('bp-admin/block/'.$c->id.'/edit') }}" >{{$c->title}}</a>
                            </td>
                            <td>@isset($c->translate)
                                    <a href="{{ url('bp-admin/block/'.$c->id.'/edit') }}" >{{langauge($c->lang)}}</a> | <a href="{{ url('bp-admin/block/'.$c->translate->id.'/edit') }}" >{{ langauge($c->translate->lang) }}</a>
                                @else
                                     <a href="{{ url('bp-admin/block/'.$c->id.'/edit') }}" >{{langauge($c->lang)}}</a> 
                                @endisset
                            </td>
                            <td>
                                <div class="col-sm-3"><a href="{{ url('bp-admin/block/'.$c->id.'/edit') }}" class="btn btn-xs btn-info">Edit</a>
                                </div>
                                <div class="col-sm-9">
                                    <a href="{{ url('bp-admin/block/delete', [$c->id]) }}" class="btn btn-delete btn-xs btn-danger">Delete</a>
                                </div>
                            </td>
                            <td>{{$c->active}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pagination"> {{ $block->links() }} </div>
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