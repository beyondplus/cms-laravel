@extends('bp-admin.layouts.admin.index')

@section('title', 'User')

@section('content')
  <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4>Admin</h4>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-5">
                            {{Form::model($adminaccounts, [
                                'url' => ['bp-admin/account', $adminaccounts->id],
                                'method' => 'put',
                                'files' => 'true'
                                ])}}
                                
                            @if ($errors->all())
                                <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </div>
                            @endif
                            {{--  --}}
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                {{ Form::text('username', null,['class'=>'form-control'])}}
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                {{ Form::text('email',null,array('class'=>'form-control')) }}
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                {{ Form::password('password',['class'=>'form-control']) }}
                            </div>
                            <div>
                                <button type="submit" class="pull-right btn btn-success">Update</button>
                            </div>
                            {{Form::close()}}
                            {{--  --}}
                        </div>{{-- end of form wrapper div --}}
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