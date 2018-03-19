
@extends('bp-admin.layouts.admin.index')

@section('title', 'Category')

@section('content')
  <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4>Category</h4>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-5">
                            {{Form::model($category, [
                                'url' => ['bp-admin/category', $category->tax_id],
                                'method' => 'put',
                                'files' => 'true'
                                ])}}
                            @component('bp-admin.inc.alert')
                            @endcomponent
                            
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                {{Form::text('tax_name', null,['class'=>'form-control'])}}
                            </div>
                            <div class="form-group">
                                <label class="control-label">Image</label>
                                {{ Form::file('tax_icon',null,array('class'=>'form-control')) }}
                                {{ Form::hidden('tax_icon',null,array('class'=>'form-control')) }}
                            </div>
                            <div class="form-group">
                                <label class="control-label">Parent Name</label>
                               {{ Form::select('parent_id',$categories,$category->translate_id, array('class' => 'form-control', 'placeholder' => 'Choose Parent ...'))}}
                            </div> 
                    
                            <div class="form-group">
                                <label class="control-label">{{ Form::label('Translate') }}</label>
                                
                                        {{ Form::select('translate_id',bp_select_taxes(),$category->translate_id,array('class'=>'form-control')) }}
                         
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Active</label>
                                {{Form::select('tax_active', [
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