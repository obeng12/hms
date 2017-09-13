@extends('layout.base')

@section('content')

<h1> Book Appointment</h1>
<form class="" action="" method="post">
<div class="row ">
<div class="col-sm-offset-2 col-md-4">
  <div class="form-group">
  <label for="patientID">PatientID</label>
  <input type="text" name="patientID" value="" class="form-control">
  </div>
<div class="form-group">
<label for="dateofappointment">Date of Appointment</label>
<input type="date" name="date_appoint" value="" class="form-control">
</div>
<div class="form-group">
<label for="time">Time</label>
<input type="time" name="time" value="" class="form-control">
</div>

<div class="form-group">
<label for="patientname">Type Of Schedule</label>
<input type="text" name="appointment" value="" class="form-control">
</div>

{{csrf_field()}}
<input type="submit" name="submit" value="Save" class="btn btn-success pull-right">

</div>
</div>
</form>
@endsection
