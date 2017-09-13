@extends('layout.base')


@section('content')
<h1>Pharmacydrug</h1>
<form class="" action="" method="post">
<div class="row ">
<div class="col-sm-offset-2 col-md-4">
<div class="form-group">
<label for="patientID">Patient ID</label>
<input type="text" name="patientID" value="" class="form-control">
</div>
<div class="form-group">
<label for="firstname">First Name</label>
<input type="text" name="firstname" value="" class="form-control">
</div>
<div class="form-group">
<label for="drug">Drug</label>
<textarea name="drug" rows="8" cols="80" placeholder="drugs..........."></textarea>
</div>
  <input type="submit" name="submit" value="Save" class="btn btn-success pull-right">
{{csrf_field()}}
</form>

@endsection
