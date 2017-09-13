@extends('layout.base')

@section('content')
<h1>Role</h1>
<form class="" action="" method="post">
  <div class="row">
    <div class="col-sm-offset-1 col-md-4">
      <div class="form-group">
        <label for="rolename">Role</label>
        <input type="rolename" name="rolename" value="" class="form-control">

      </div>
      {{csrf_field()}}
      <button type="submit" name="submit" class="btn btn-success pull-right">Save</button>
    </div>

  </div>

</form>
@endsection
