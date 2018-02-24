@extends('bp-admin.layouts.admin.index')

@section('title', 'Category')

@section('content')
 <div class="row">

        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4>Title</h4>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-5">
                            {{Form::open([
                                'url' => 'bp-admin/new',
                                'method' => 'post',
                                'files' => 'true',
                                ])}}
                          
                          <!--   @if ($errors->has())
                                <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </div>
                            @endif -->
                            {{--  --}}
                            
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                {{Form::text('custom_name', null,['class'=>'form-control'])}}
                               
                            </div>
                            <div class="form-group">
                                <label class="control-label">Link</label>
                                {{Form::text('custom_link', null,['class'=>'form-control'])}}
                               
                            </div>
                           <!--  <div class="form-group">
                                <label class="control-label">Image</label>
                                {{ Form::file('custom_icon',null,array('class'=>'form-control')) }}
                                {{ Form::hidden('custom_icon',null,array('class'=>'form-control')) }}
                            </div> -->

                            <div class="form-group">
                                <label class="control-label">Active</label>
                                {{Form::select('custom_active', [
                                    'yes' => 'Yes',
                                    'no' => 'No',
                                ],  null, ['class'=> 'form-control'])}}
                            </div>
                       
                            <div class="">
                                <button type="submit" class="pull-right btn btn-success">Create</button>
                            </div>
                            {{ Form::close() }}
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
           /// alert("aa");
        });
    </script>
@endpush