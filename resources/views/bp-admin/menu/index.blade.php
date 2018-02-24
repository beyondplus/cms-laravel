
@extends('bp-admin.layouts.admin.index')

@section('title', 'Menu')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="box box-danger">
                <div class="box-body">
                    {{ Form::open([
                                'url' => 'bp-admin/menu/pagestore',
                                'method' => 'post',
                                'files' => 'true',
                                ]) }}
                    <div class="row">
                                    <div class="col-md-9">
                                        
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="pull-right btn">Insert</button>
                                            <!-- <i class="fa fa-user-plus"></i> -->
                                        </a>
                                    </div>

                    </div>
                    <div class="col-md-12 form-group scrollbar">
                    
                                {{ Form::label('Pages') }} <br />
                                <div class="row">
                                    @foreach($pages as $page)
                                    
                                    <div class="col-md-2">
                                        {{ Form::checkbox('pages[]' , $page->id ) }}
                                    </div>
                                    <div class="col-md-10">
                                        <label for="{{$page ->title}}">
                                            {{$page->title}}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                    </div>
                    
                    {{ Form::close() }}

                    {{ Form::open([
                                'url' => 'bp-admin/menu/poststore',
                                'method' => 'post',
                                'files' => 'true',
                                ]) }}
                    <div class="row">
                                    <div class="col-md-9">
                                        
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="pull-right btn">Insert</button>
                                            <!-- <i class="fa fa-user-plus"></i> -->
                                        </a>
                                    </div>
                                    
                    </div>

                    <div class="col-md-12 form-group scrollbar">
                                {{ Form::label('Posts') }}<br />
                                <div class="row">
                                    @foreach($posts as $post)
                                    
                                    <div class="col-md-2">
                                        {{ Form::checkbox('posts[]' , $post->id ) }}
                                    </div>
                                    <div class="col-md-10">
                                        <label for="{{$post ->title}}">
                                            {{$post->title}}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="box box-danger">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4>Show</h4>
                        </div>
                        <div class="col-sm-3 pull-right">
                            <!-- <a href="{{ url('bp-admin/menu/add') }}" class="btn btn-success  pull-right">
                                <i class="fa fa-user-plus"></i>
                                New
                            </a> -->
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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menu as $m)
                        <tr>
                            <td>{{$m->menu_name}}</td>
                            <td>
                                <a href="{{ url('bp-admin/menu/'.$m->menu_id.'/edit') }}" class="btn btn-xs btn-info">Edit</a>
                                <a href="{{ url('bp-admin/menu/delete',$m->menu_id) }}" class="btn btn-delete btn-xs btn-danger">Delete</a>
                                
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12">
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
           /// alert("aa");
        });
    </script>
@endpush