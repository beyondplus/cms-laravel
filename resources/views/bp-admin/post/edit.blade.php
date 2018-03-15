
@extends('bp-admin.layouts.admin.index')

@section('title', 'Post')

@section('content')
  <div class="row">
    {{ Form::model($post, [
                    'url' => ['bp-admin/post', $post->id],
                    'method' => 'put',
                    'files' => 'true'
                    ]) }}
        <div class="col-md-9">
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
                        <div class="col-sm-10">
                            
                            @component('bp-admin.inc.alert')
                            @endcomponent
                            
                            {{--  --}}
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                {{ Form::text('title', null,['class'=>'form-control']) }}
                               
                            </div>
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                {{  Form::textarea('body', null, ['class'=>'form-control'])  }}
                               
                            </div> 
                            <div class="form-group">
                                <label class="control-label">Weight</label>
                                {{ Form::text('post_weight', null,['class'=>'form-control']) }}
                               
                            </div>
                            <div class="form-group">
                                <label class="control-label">Active</label>
                                <select class="form-control" name="post_active">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                          
                            <div>
                                <button type="submit" class="pull-right btn btn-success">Update</button>
                            </div>
                            
                            {{--  --}}
                        </div>
                      
                        
                        {{-- end of form wrapper div --}}
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-3">
            <div class="box box-danger">
                <div class="box-body">
                    {{  Form::label('Categories')  }}<br />
                    <div class="col-md-12 form-group scrollbar">
                        <ul>
                            @foreach($taxes as $tax)
                            <li>   
                                
                                {{ Form::checkbox('taxes[]' , $tax->tax_id, in_array($tax->tax_id,     $tax_type) ) }}

                                <label for="{{$tax->tax_name}}">{{$tax->tax_name}}</label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="box box-danger">
                <div class="box-body">
                    {{ Form::label('Featured Image') }}<br />
                    <div class="col-md-12 form-group">
                        
                        <div class="row">
                                {{ Form::file('featured_img',array('class'=>'form-control')) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-body">
                    <div class="col-md-12">
                        @if($post->featured_img)
                            <img src="{{url('uploads/'.$post->featured_img)}}" class="img-responsive">
                        @else 
                            <img src="{{url('uploads/default.jpg')}}" class="img-responsive">
                            
                        @endif
                    </div>  
                </div>
            </div>
            
        </div> 
        {{ Form::close() }}
    </div>

@stop

@push('scripts')
    <script src="{{url('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script src="{{url('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
@endpush