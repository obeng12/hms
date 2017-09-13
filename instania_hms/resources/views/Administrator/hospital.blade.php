@extends('layout.base')

@section('content')
<h1>Hospital</h1>
<form class="" action="" method="post">
<div class="row ">
<div class="col-sm-offset-3 col-md-4">
<div class="form-group">
<label for="hosID">Hospital ID</label>
<input type="text" name="hosID" value="" class="form-control">
</div>
<div class="form-group">
<label for="Name">Name Of Hospital</label>
<input type="text" name="name" value="" class="form-control">
</div>
<div class="form-group">
<label for="loc">Location</label>
<input type="text" name="location" value="" class="form-control">
</div>
<input type="submit" name="submit" value="Save" class="btn btn-success pull-right">
{{csrf_field()}}
</form>


@endsection
