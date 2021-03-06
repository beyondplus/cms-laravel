
@extends('bp-admin.layouts.admin.index')

@section('title', 'Slider')

@section('content')
  <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-7">
                            <h4>Form</h4>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-7">
                            {{Form::model($slider, [
                                'url' => ['bp-admin/slider', $slider->slider_id],
                                'method' => 'put',
                                'files' => 'true'
                                ])}}
                            
                            @component('bp-admin.inc.alert')
                            @endcomponent
                            
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                {{Form::text('slider_name', null,['class'=>'form-control'])}}
                               
                            </div>
                            <div class="form-group">
                                <label class="control-label">Image</label>
                                {{ Form::file('slider_link',null,array('class'=>'form-control')) }}
                                {{ Form::hidden('slider_link',null,array('class'=>'form-control')) }}
                            </div>
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                {{ Form::textarea('slider_description', null, ['class'=>'form-control']) }}
                               
                            </div> 
                            <div class="form-group">
                                <label class="control-label">Weight</label>
                                {{Form::text('weight', null,['class'=>'form-control'])}}
                               
                            </div>
                            <div class="form-group">
                                <label class="control-label">Active</label>
                                <select class="form-control" name="active">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
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