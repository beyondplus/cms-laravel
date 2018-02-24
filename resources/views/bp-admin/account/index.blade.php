@extends('bp-admin.layouts.admin.index')

@section('title', 'Accont')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-5">
                            
                            <div class="form-group">
                             {{ Form::open([
                                'method' => 'get'
                                ]) }}
                              <input type="text" name="search"   class="form-control" placeholder="Search" value="{{\Request::get('search')}}">
                             {{ Form::close() }}
                            </div>
                        </div>
                        <div class="col-sm-3 pull-right">
                             

                            <a href="{{ url('bp-admin/account/create') }}" class="btn btn-success  pull-right">
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
                            <th>AdminName</th>
                            <th>Email</th>
                            <th>Created Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($adminaccounts as $adminaccount)
                        
                        
                        <tr>
                            <td>{{$adminaccount->username}}</a></td>
                            <td>{{$adminaccount->email}}</td>
                            <td>{{$adminaccount->created_at}}</td>
                            <td>
        
                                <div style="float:right">
                                <a href="{{ url('bp-admin/account/'.$adminaccount->id.'/edit') }}" class="btn btn-xs btn-info">Edit</a>
                                
                                <a href="{{ url('bp-admin/account/delete',[$adminaccount->id]) }}" class="btn btn-delete btn-xs btn-danger">Remove</a>
                                </div>
                             </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12">
                           {{--!! dataPaginator($users, true) !!--}}
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