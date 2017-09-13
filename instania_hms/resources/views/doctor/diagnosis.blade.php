@extends('layout.base')

@section('content')
<h1>Diagnosit</h1>
<form class="" action="" method="post">
<div class="row ">
<div class="col-sm-offset-2 col-md-4">
<div class="form-group">
<label for="PatientID">Patient ID</label>
<input type="text" name="staffID" value="" class="form-control">
</div>
<div class="form-group">
<label for="name">Name</label>
<input type="text" name="name" value="" class="form-control">
</div>
<div class="form-group">
<label for="firstname">First Name</label>
<input type="text" name="firstname" value="" class="form-control">
</div>
<div class="form-group">
<label for="diagnosis">Middle Name</label>
<textarea name="diagnosis" rows="8" cols="80"></textarea>
</div>

</form>

@endsection
