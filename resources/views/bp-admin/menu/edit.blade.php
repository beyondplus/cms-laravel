
@extends('bp-admin.layouts.admin.index')

@section('title', 'Menu')

@section('content')
  <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-5">
                            <h4>Menu</h4>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-5">
                            {{ Form::model($menu, [
                                'url' => ['bp-admin/menu', $menu->menu_id],
                                'method' => 'put',
                                'files' => 'true'
                                ]) }}
                                
                            @component('bp-admin.inc.alert')
                            @endcomponent
                            {{--  --}}
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                {{ Form::text('menu_name', null,['class'=>'form-control']) }}
                            </div>
                        <!--     <div class="form-group">
                                <label class="control-label">Image</label>
                                {!! Form::file('menu_icon',null,array('class'=>'form-control')) !!}
                                {!! Form::hidden('menu_icon',null,array('class'=>'form-control')) !!}
                            </div>
                        -->
                            <div class="form-group">
                                <label class="control-label">Weight</label>
                                {{ Form::text('menu_weight', 0,['class'=>'form-control']) }}
                            </div>

                            <div class="form-group">
                                <label class="control-label">Parent Name</label>
                                 
                                     {{ Form::select('parent_id',bp_select_menus(),$menu->parent_id,['class'=>'form-control']) }}
                                   
                            </div> 

                            <div class="form-group">
                                <label class="control-label">{{ Form::label('Translate') }}</label>
                                
                                        {{ Form::select('translate_id',bp_select_menus(),$menu->translate_id,array('class'=>'form-control')) }}
                                
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">{{ Form::label('Language') }}</label>
                                    {{ Form::select('lang',langauge(),$menu->lang,array('class'=>'form-control')) }}
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">Active</label>
                                {{ Form::select('menu_active', [
                                    'yes' => 'Yes',
                                    'no' => 'No',
                                ],  null, ['class'=> 'form-control']) }}
                            </div>
                          
                            <div>
                                <button type="submit" class="pull-right btn btn-success">Update</button>
                            </div>
                            {{ Form::close() }}
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