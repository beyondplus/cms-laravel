@extends('bp-admin.layouts.admin.index')

@section('title', 'Permisson')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-danger">
            <div class="box-header">
                <div class="row">
                    <div class="col-sm-5">

                    </div>
                    <div class="col-sm-3 pull-right">


                        <a href="{{ url('bp-admin/user/create') }}" class="btn btn-success  pull-right">
                            <i class="fa fa-user-plus"></i>
                            New<span id="ok"></span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                <table  class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Module Name</th>
                            <th>User</th>
                            <th>Staff</th>
                            <th>Admin</th>
                            <th>Super Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($module as $m)

                        <tr>
                            <td>{{$i++}}</a></td>
                            <td>{{$m->module->module_name}}</a></td>
                            <td>{{Form::checkbox('user',$m->module_id,$m->user, ['class' => 'user' , 'id' => 'user-'.$m->module_id])}}</td>
                            <td>{{Form::checkbox('staff', $m->module_id, $m->staff, ['class' => 'staff' , 'id' => 'staff-'.$m->module_id])}}</td>
                            <td>{{Form::checkbox('admin', $m->module_id, $m->admin, ['class' => 'admin' ,'id' => 'admin-'.$m->module_id])}}</td>
                            <td>{{Form::checkbox('superadmin', $m->module_id, $m->superadmin, ['class' => 'superadmin' ,'id' => 'superadmin-'.$m->module_id])}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-12">
                     {{--!! dataPaginator($users, true) !!--}}
                 </div>
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
        function loadDoc(module_id,option,type) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  if(option == 1) {
                    $(this.responseText).unchecked;
                  } else {
                    $(this.responseText).checked;
                  } 
              } 
          };
          xhttp.open("POST", "/bp-admin/permisson", true);
          // xhttp.open("GET", '/bp-admin/permission/update', true);
          xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
          xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          xhttp.setRequestHeader('Cache-Control', 'no-cache');
          xhttp.setRequestHeader('X-CSRF-TOKEN', document.querySelector('[name=csrf-token]').getAttribute('content'));
          xhttp.send("module_id="+module_id+"&option="+option+"&type="+type);
          // xhttp.send();
      }

      $('.user,.staff,.admin,.superadmin').on('click', function() {
        var module_id = $(this).val();
        var option = Number(this.checked);
        loadDoc(module_id, option, this.className);
    });
  });


</script>
@endpush