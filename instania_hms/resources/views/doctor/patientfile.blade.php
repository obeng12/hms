@extends('layout.base')

@section('content')
<h1>Patient</h1>
<form class="" action="" method="post">
<div class="row ">
<div class="col-sm-offset-2 col-md-4">
<div class="form-group">
<label for="staffID">Staff ID</label>
<input type="text" name="staffID" value="" class="form-control">
</div>
<div class="form-group">
<label for="patientID">Patient ID</label>
<input type="text" name="patientID" value="" class="form-control">
</div>
<div class="form-group">
<label for="firstname">First Name</label>
<input type="text" name="firstname" value="" class="form-control">
</div>
<div class="form-group">
<label for="middle">Middle Name</label>
<input type="text" name="middle" value="" class="form-control">
</div>
<div class="form-group">
<label for="surname">Sur Name</label>
<input type="text" name="surname" value="" class="form-control">
</div>
<div class="form-group">
<label for="gender">Gender</label>
<input type="text" name="gender" value="" class="form-control">
</div>
<div class="form-group">
<label for="Temperature">Temperature</label>
<input type="text" name="temperature" value="" class="form-control">
</div>
<div class="form-group">
<label for="weight">Weight</label>
<input type="text" name="weight" value="" class="form-control">
</div>
</div>
<div class="col-md-4">

  <div class="form-group">
  <label for="height">Height</label>
  <input type="text" name="height" value="" class="form-control">
  </div>
  <div class="form-group">
  <label for="pulse">Pulse Rate</label>
  <input type="text" name="pulse" value="" class="form-control">
  </div>
  <div class="form-group">
  <label for="bp">Blood Preasure</label>
  <input type="text" name="bp" value="" class="form-control">
  </div>
  <div class="form-group">
  <label for="other">Diagnosis</label>
  <textarea name="other" rows="8" cols="80" placeholder="record any other relevant information here......."></textarea>
  </div>
  <input type="submit" name="submit" value="Save" class="btn btn-success pull-right">
  {{csrf_field()}}
  </div>
  </div>
</form>
@endsection
