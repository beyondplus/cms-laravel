@if(session('success'))
    <div class="alert alert-success">
        <li>{{session('success')}}</li>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </div>
@endif