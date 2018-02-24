@extends('bp-admin.layouts.admin.index')

@section('title', 'Settings')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {{ Form::open([
                'url' => 'bp-admin/generals/add',
                'method' => 'post',
                'files' => 'true',
                ]) }}
            <div class="box box-danger">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4>Show</h4>
                        </div>
                        <div class="col-sm-3 pull-right">
                            <!-- <a href="{{ url('bp-admin/category/add') }}" class="btn btn-success  pull-right">
                                <i class="fa fa-user-plus"></i>
                                Save
                            </a> -->

                            <input type="submit" name="save" value="save" class="btn btn-success  pull-right">
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table  class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Value</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($options as $c)
                        <tr>
                            <td>{{$c->option_name}}</td>
                            <td>{{Form::text($c->option_name, $c->option_value,['class'=>'form-control'])}}</td>
                           
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            {{ Form::close() }}
        </div>
    </div>
@stop


@push('scripts')
    <script>
        $(document).ready(function () {
           /// alert("aa");
        });
    </script>
@endpush