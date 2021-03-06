
@extends('bp-admin.layouts.admin.index')

@section('title', 'Category')

@section('content')
  <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="row">
                        <div class="col-sm-7">
                            <h4>Form </h4>
                        </div>
                        <div class="col-sm-5 text-right">
                            <b><i>{{ langauge($category->lang) }}</i></b>
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
                                <label class="control-label">Type</label>
                                {{Form::select('tax_type', [
                                    'cat' => 'Category',
                                    'tax' => 'Taxanomy',
                                    'other' => 'Other',
                                ],  null, ['class'=> 'form-control'])}}
                            </div>
                            <div class="form-group">
                                <label class="control-label">Parent Name</label>
                               {{ Form::select('parent_id',bp_select_taxes('cat'),$category->translate_id, array('class' => 'form-control', 'placeholder' => 'Choose Parent ...'))}}
                            </div> 
                    
                            <div class="form-group">
                                <label class="control-label">{{ Form::label('Translate') }}<a href="{{url('/bp-admin/category/'.$category->tax_id.'/translate')}}"> Category</a></label>
                                
                                        {{ Form::select('translate_id',bp_select_taxes('cat'),$category->translate_id,array('class'=>'form-control')) }}
                         
                            </div>

                            <div class="form-group">
                                <label class="control-label">{{ Form::label('Language') }}</label>
                                    {{ Form::select('lang',langauge(),$category->lang,array('class'=>'form-control')) }}
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