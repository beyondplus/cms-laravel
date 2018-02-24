@extends('bp-admin.layouts.admin.index')

@section('title', 'Taxonomy')

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
                            <a href="{{ url('bp-admin/tax/add') }}" class="btn btn-success  pull-right">
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
                            <th>Action</th>
                           <!--  <th>Active</th>
                            <th>Icon</th>
                            <th>Marker Image</th>
                            <th>Actions</th> -->
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tax as $c)
                        <tr>
                            <td>{{$c->tax_name}}</td>
                            <td>
                                <a href="{{ url('bp-admin/tax', [$c->tax_id]) }}" class="btn btn-xs btn-info">Edit</a>
                                <a href="{{ url('bp-admin/tax/delete', [$c->tax_id]) }}" class="btn btn-delete btn-xs btn-danger">Delete</a>
                                
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pagination"> {{ $tax->links() }} </div>
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