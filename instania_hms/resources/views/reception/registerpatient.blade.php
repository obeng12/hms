@extends('layout.base')

@section('content')
<h1>Register Patient</h1>

  <form class="" action="" method="post">
<div class="row ">
<div class=" col-md-4">
<div class="form-group">
  <label for="patientID">Patient ID</label>
  <input type="text" name="patientID" value="" class="form-control">
</div>
<div class="form-group">
  <label for="staffID">Staff ID</label>
  <input type="text" name="staffID" value="" class="form-control">
</div>
<div class="form-group">
  <label for="hospitalID">Hospital ID</label>
  <input type="text" name="HospitalID" value="" class="form-control">
</div>
<div class="form-group">
  <label for="firstname">First Name</label>
  <input type="text" name="firstname" value="" class="form-control">
</div>
<div class="form-group">
  <label for="Middle">Middle Name</label>
  <input type="text" name="middlename" value="" class="form-control">
</div>
<div class="form-group">
  <label for="surname">Sur Name</label>
  <input type="text" name="surname" value="" class="form-control">
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
  <label for="cpassword">Confirm PassWord</label>
  <input type="password" name="cpassword" value="" class="form-control">
</div>
<div class="form-group">
  <label for="adress">Patient Address</label>
  <input type="text" name="pataddress" value="" class="form-control">
</div>
<div class="form-group">
  <label for="emergencyname">Emergency Contact Name</label>
  <input type="text" name="emergencyname" value="" class="form-control">
</div>
  <div class="form-group">
    <div class="form-group">
      <label for="emergencyaddress">Emergency Address</label>
      <input type="text" name="emergencyaddress" value="" class="form-control">
    </div>
    <div class="form-group">
      <label for="emergency">Emergency Contact</label>
      <input type="text" name="emergencynum" value="" class="form-control">
    </div>
    <label for="homenum">Home Number</label>
    <input type="text" name="homenum" value="" class="form-control">
  </div>
  </div>
       <div class="col-md-4">
    <div class="form-group">
      <label for="phone number">Tell number</label>
      <input type="text" name="tellnum" value="" class="form-control">
    </div>
    <div class="form-group">
      <label for="Gender">Gender</label>
    <select class="form-control" name="gender">
      <option value="0"></option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
    </select>
    </div>
    <div class="form-group">
      <label for="job">Registration Date</label>
      <input type="date" name="regdate" value="" class="form-control">
    </div>
    <div class="form-group">
      <label for="NIS">NIS Holder</label>
      <select class="form-control" name="cardholder">
        <option value="0"></option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
    </div>
      <div class="form-group">
        <label for="cardnumber">Card Number</label>
        <input type="text" name="cardnum" value="" class="form-control">
      </div>

    <div class="form-group">
      <label for="status">Marital Status</label>
      <select class="form-control" name="maritalstatus">
        <option value="0"></option>
        <option value="Single">Single</option>
        <option value="Married">Married</option>
      </select>
    </div>
    </div>
    <input type="submit" name="submit" value="Save" class="btn btn-success pull-right">
    {{csrf_field()}}
    </div>
  </form>



@endsection
