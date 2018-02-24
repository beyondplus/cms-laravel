
@extends('bp-admin.layouts.admin.index')

@section('title', 'Custom')

@section('content')
  <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4>Custom</h4>
                        </div>
                    </div>
                </div>
                <!-- @if ($errors->has())
                                <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </div>
                            @endif -->
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-5">
                            {{Form::model($custom, [
                                'url' => ['bp-admin/new', $custom->custom_id],
                                'method' => 'put',
                                'files' => 'true'
                                ])}}
                            
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
                            </div>
                            <div class="form-group">
                                <label class="control-label">Parent Name</label>
                                  @if($custom->parent_id == 0)
                                    {{Form::select('parent_id',$categories,null, array('class' => 'form-control', 'placeholder' => 'Choose Parent ...'))}}
                                   @else
                                     {{Form::select('parent_id',$categories,'null',['class'=>'form-control'])}}
                                   @endif
                            </div>  -->
                            
                            
                            <div class="form-group">
                                <label class="control-label">Active</label>
                                {{Form::select('custom_active', [
                                    'yes' => 'Yes',
                                    'no' => 'No',
                                ],  null, ['class'=> 'form-control'])}}
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