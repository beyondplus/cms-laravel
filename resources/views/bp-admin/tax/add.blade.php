@extends('bp-admin.layouts.admin.index')

@section('title', 'Taxonomy')

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
                            {!!Form::open([
                                'url' => 'bp-admin/tax/add',
                                'method' => 'post',
                                'files' => 'true',
                                ])!!}
                          
                            @component('bp-admin.inc.alert')
                            @endcomponent
                            
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                {!!Form::text('tax_name', null,['class'=>'form-control'])!!}
                               
                            </div>
                            <div class="form-group">
                                <label class="control-label">Image</label>
                                {!! Form::file('tax_icon',null,array('class'=>'form-control')) !!}
                            </div>
                            <div class="form-group">
                                <label class="control-label">Parent Name</label>
                               {!! Form::select('parent_id',$taxes,1, array('class' => 'form-control', 'placeholder' => 'Choose Parent ...'))!!}
                            </div> 

                            <div class="form-group">
                                <label class="control-label">{{ Form::label('Translate') }}</label>
                                
                                        {{ Form::select('translate_id',bp_select_taxes(),1,array('class'=>'form-control')) }}
                                
                            </div>

                            <div class="form-group">
                                <label class="control-label">{{ Form::label('Language') }}</label>
                                    {{ Form::select('lang',langauge(),1,array('class'=>'form-control')) }}
                            </div>

                            

                            <div class="form-group">
                                <label class="control-label">Active</label>
                                <select class="form-control" name="tax_active">
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                       
                            <div class="">
                                <button type="submit" class="pull-right btn btn-success">Create</button>
                            </div>
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