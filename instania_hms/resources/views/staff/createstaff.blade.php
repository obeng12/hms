@extends('layout.base')
@section('content')

<form class="" action="" method="post">
  <h1>Create Account</h1>
<div class="row ">
<div class="col-sm-offset-2 col-md-4">
  @if(count($errors)>0)
  <div class="alert alert-daner">
    @foreach($errors->all() as $error )
    <p>{{$error}}</p>
    @endforeach
  </div>
  @endif
<div class="form-group">
<label for="staffid">Staff ID</label>
<input type="text" name="staffid" value="" class="form-control">
</div>
<div class="form-group">
<label for="hospitalID">Hospital ID</label>
<input type="text" name="hospitalID" value="" class="form-control">
</div>
<div class="form-group">
<label for="firstname">First Name</label>
<input type="text" name="firstname" value="" class="form-control">
</div>
<div class="form-group">
<label for="middle">Middle Name</label>
<input type="text" name="middilename" value="" class="form-control">
</div>
<div class="form-group">
<label for="surname">Sur Name</label>
<input type="text" name="surname" value="" class="form-control">
</div>


<div class="form-group">
<label for="Position">Position</label>
<select class="form-control position" name="pos">
  <option value="0" disabled="true" selected="true">-Select-</option>
@foreach($table as $table)
<option value="{{$table->id}}">{{$table->rolename}}</option>
@endforeach
</select>
</div>
<div class="form-group">
<label for="email">E-mail</label>
<input type="email" name="email" value="" class="form-control">
</div>
</div>


<div class="col-md-4">
  <div class="form-group">
  <label for="password">PassWord</label>
  <input type="password" name="password" value="" class="form-control">
  </div>
  <div class="form-group">
    <label for="Liscense">Liscense Nummber</label>
    <input type="text" name="Liscense" value="" class="form-control">
  </div>

  <div class="form-group">
    <label for="phone number">Tell number</label>
    <input type="text" name="number" value="" class="form-control">
  </div>
  <div class="form-group">
    <label for="Gender">Gender</label>
  <select class="form-control" name="gen">
  <option value="0" disabled="true" selected="true">-Select-</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
  </select>
  </div>
  <div class="form-group">
    <label for="job">Job Description</label>
    <input type="text" name="job" value="" class="form-control">
  </div>
  <div class="form-group">
    <label for="department">Department</label>
    <input type="text" name="department" value="" class="form-control">
  </div>

  <input type="submit" name="submit" value="Save" class="btn btn-success pull-right">
  {{csrf_field()}}
  </div>
  </div>
</form>
@stop
@push('scripts')
<script>
$(document).ready(function(){

$(document).on('change','.position', function(){
console.log("it changed");

var id=$(this).val();
console.log(id);

});
});
</script>
@endpush
