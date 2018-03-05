@extends('bp-admin.layouts.admin.index')

@section('title', 'Page')

@section('content')
 <div class="row">

        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-7">
                            <h4>Title</h4>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-7">
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
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

     <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
     <script src="{{url('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
        <script src="{{url('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
        <script>
            $('textarea').ckeditor();
            // $('.textarea').ckeditor(); // if class is prefered.
        </script>
@stop

@push('scripts')
    <script>
        $(document).ready(function () {
        });
    </script>
@endpush