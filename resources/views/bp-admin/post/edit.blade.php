
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
                    <div class="col-md-12 form-group scrollbar">
                        {{  Form::label('Categories')  }}<br />
                        <ul>
                            @foreach($categories as $category)
                            <li>
                            {{ Form::checkbox('categories[]' , $category->category_id, in_array($category->category_id, $term_cat) ) }}
                            <label for="{{$category->category_name}}">{{$category->category_name}}</label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
        {{ Form::close() }}
    </div>

@stop

@push('scripts')
    <script>
        $(document).ready(function () {
        });
    </script>
@endpush