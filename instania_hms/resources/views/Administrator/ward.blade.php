@extends('layout.base')

@section('content')
<h1>Ward</h1>
<form class="" action="" method="post">
<div class="row ">
<div class="col-sm-offset-3 col-md-4">
<div class="form-group">
<label for="wardID">Ward ID</label>
<input type="text" name="hosID" value="" class="form-control">
</div>
<div class="form-group">
<label for="Name">Name Of Ward</label>
<input type="text" name="wardname" value="" class="form-control">
</div>
<div class="form-group">
<label for="num">Ward Number</label>
<input type="text" name="wardnum" value="" class="form-control">
</div>
<div class="form-group">
<label for="num">Number Of Beds</label>
<input type="text" name="bednum" value="" class="form-control">
</div>
<input type="submit" name="submit" value="Save" class="btn btn-success pull-right">
{{csrf_field()}}
</form>
@endsection
