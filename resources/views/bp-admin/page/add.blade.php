@extends('bp-admin.layouts.admin.index')

@section('title', 'Page')

@section('content')
 <div class="row">

        <div class="col-md-9">
            <div class="box box-danger">
                <div class="box-header">
                        <div class="col-sm-7">
                            <h4>Title</h4>
                        </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                        <div class="col-sm-10">
                            {{ Form::open([
                                'url' => 'bp-admin/page',
                                'method' => 'post',
                                'files' => 'true',
                                ]) }}
                          
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
                                {{ Form::textarea('body', null, ['class'=>'form-control']) }}
                               
                            </div>
                            <div class="form-group">
                                <label class="control-label">Weight</label>
                                {{ Form::text('post_weight', 0,['class'=>'form-control']) }}
                               
                            </div>
                            <div class="form-group">
                                <label class="control-label">Active</label>
                                <select class="form-control" name="post_active">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                       
                            <div class="">
                                <button type="submit" class="pull-right btn btn-success">Create</button>
                            </div>
                            {{--  --}}
                        </div>{{-- end of form wrapper div --}}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-3">
            <div class="box box-danger">
                <div class="box-body">
                    <div class="col-md-12 form-group">
                        {{ Form::label('Template Name') }}<br />
                        {{ Form::text('post_template', 'default' ,['class'=>'form-control']) }}
                    </div>
                </div>
            </div>
        </div>  
    </div>
@endsection
@push('scripts')
    <script src="{{url('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script src="{{url('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
    <script>
        $('textarea').ckeditor();
    </script>
@endpush