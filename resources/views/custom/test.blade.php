@extends('bp-admin.layouts.admin.index')

@section('title', 'Test')

@section('content')
 <div class="row">

        <div class="col-md-12">
        	<div class="box box-danger">
        		<div class="box-body text-center ">
        			<br><br>
        		    <h3>Write Something</h3>
        			<br><br>
        		</div>
        	</div>
          </div>
  </div>
@stop

@push('scripts')
    <script>
        $(document).ready(function () {
           /// alert("aa");
        });
    </script>
@endpush