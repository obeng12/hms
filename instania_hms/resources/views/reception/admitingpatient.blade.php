@extends('layout.base')

@section('content')
<h1>Admit</h1>
<form class="" action="" method="post">
<div class="row ">
<div class="col-sm-offset-2 col-md-4">
<div class="form-group">
<label for="admitID">Admission ID</label>
<input type="text" name="admitID" value="" class="form-control">
</div>
<div class="form-group">
<label for="patientID">PatientID</label>
<input type="text" name="patientID" value="" class="form-control">
</div>
<div class="form-group">
<label for="patientname">Name</label>
<input type="text" name="patientname" value="" class="form-control">
</div>
<div class="form-group">
<label for="time"> Time</label>
<input type="time" name="tod" value="" class="form-control">
</div>
<div class="form-group">
<label for="Date"> Date</label>
<input type="Date" name="date" value="" class="form-control">
</div>
<div class="form-group">
<label for="ward">Ward Name</label>
<select class="form-control" name="">
  <option value=""></option>
</select>
</div>
<div class="form-group">
<label for="bednumber">Bed Number</label>
<input type="text" name="bednum" value="" class="form-control">
</div>
<input type="submit" name="submit" value="Save" class="btn btn-success pull-right">
{{csrf_field()}}
</div>
</div>

</form>

@endsection
