@extends('bp-admin.layouts.admin.index')

@section('title', 'Page')

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
                            <a href="{{ url('bp-admin/page/create') }}" class="btn btn-success  pull-right">
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
                            <th>Name</th>
                            <th>Active</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($page as $c)
                        <tr>
                            <td>
                                <a href="#" name="" />{{$c->title}}</a> <br>
                                <div class="col-sm-9"></div><div class="col-sm-3"> <a href="{{ url('bp-admin/page/'.$c->id.'/edit') }}" class="btn btn-xs btn-info">Edit</a>
                                    <a href="{{ url('bp-admin/page/delete', [$c->id]) }}" class="btn btn-delete btn-xs btn-danger">Delete</a>
                                </div>
                            </td>
                            <td>{{$c->active}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pagination"> {{ $page->links() }} </div>
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