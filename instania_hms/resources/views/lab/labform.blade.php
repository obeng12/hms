@extends('layout.base')

@section('content')
<h1>Lab</h1>
<form class="" action="" method="post">
  <div class="row ">
    <div class="col-md-6">

        <div class="form-group">
          <label for="doctorsname">Doctors Name</label>
          <input type="text" name="docname" value="" class="form-control">
        </div>
        <div class="form-group">
          <label for="department">Department</label>
          <input type="text" name="department" value="" class="form-control">
        </div>
        <div class="form-group">
          <label for="patientID">Patient ID</label>
          <input type="text" name="patientID" value="" class="form-control">
        </div>
        <div class="form-group">
          <label for="patientname">Patient Name</label>
          <input type="text" name="patientname" value="" class="form-control">
        </div>
        <div class="form-group">
          <label for="gender">Gender</label>
          <input type="text" name="gender" value="" class="form-control">
        </div>
        <div class="row">
            <h3>Lab Type</h3>
          <div class=" col-md-offset-2 col-md-4 ">
            <div class="form-group ">
              <label for="bacteria">Bacteriology</label>
              <input type="checkbox" name="bacteria" value="Bacteriology"  >
            </div>
            <div class="form-group">
              <label for="haema">Haematology</label>
              <input type="checkbox" name="haema" value="Haematology">
            </div>
            <div class="form-group">
              <label for="pathology">Chemical Pathology</label>
              <input type="checkbox" name="pathology" value="ChemicalPathology" >
            </div>

          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="Histopathology">Histopathology</label>
              <input type="checkbox" name="histopathology" value="Histopathology">
            </div>
            <div class="form-group">
              <label for="parasitology">Parasitology</label>
              <input type="checkbox" name="parasitology" value="Parasitology">
            </div>
          </div>
    </div>
    </div>




        <div class="col-md-6">
          <div class="form-group">
            <label for="summarry">Clinical Summary & Diagnosis</label>
            <textarea name="summary" rows="8" cols="80"></textarea>
          </div>
          <div class="form-group">
            <label for="material">Material & Test</label>
            <textarea name="material" rows="8" cols="80"></textarea>
          </div>
          <div class="form-group">
            <label for="material">Date Of Request</label>
            <input type="date" name="dor" value="" class="form-control">
          </div>


          <input type="submit" name="submit" value="Save" class="btn btn-success pull-right ">
        </div>

      {{csrf_field()}}

      </div>
</form>
@endsection
