@extends('bp-admin.layouts.admin.index')

@section('title', 'Media')

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
                            <a href="{{ url('bp-admin/media/create') }}" class="btn btn-success  pull-right">
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
                            <th>Link </th>
                   
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($media as $c)
                        <tr>
                            <td><img src="{{ url("public/uploads/".$c->media_link)}}" alt="{{$c->media_name}}" /></td>
                            <td>
                                <a href="#" name="" />{{$c->media_name}}</a> 
                            </td>
                            <td>
                                 <input type="text" value="{{ url("public/uploads/".$c->media_link)}}" class="form-control">
                                  <a href="{{ url('bp-admin/media/'.$c->media_id.'/edit') }}" class="btn btn-xs btn-info">Edit</a>
                                 <a href="{{ url('bp-admin/media/delete', [$c->media_id]) }}" class="btn btn-delete btn-xs btn-danger">Delete</a>
                            </td>
                     
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pagination"> {{ $media->links() }} </div>
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