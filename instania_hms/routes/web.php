<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
////////////////////////////////////////////////// Administrator $staff



Route::group(['middleware'=>'auth'], function(){
Route::group(['prefix'=>'admin'], function(){

  Route::post('/addstaff',['uses'=>'staffController@poststaff',
  'as'=>'addingstaff'
  ]);

  Route::get('/addstaff',['uses'=>'staffController@geti',
  'as'=>'addingstaff'
  ]);
  Route::get('/staffs.show',['uses'=>'staffController@staffData',
  'as'=>'staffs.show'
  ]);
  Route::get('/staffs',['uses'=>'staffController@getstaffview',
  'as'=>'staffs'
  ]);
  Route::get('/logout', ['uses'=>'staffController@getlogout',
  'as'=>'log_out'
  ]);

});

});
Route::get('/role',['uses'=>'staffController@getrole',
'as'=>'role'
]);
Route::get('/roles',['uses'=>'staffController@getroleview',
'as'=>'viewrole'
]);
Route::post('/role',['uses'=>'staffController@postrole',
'as'=>'addingrole'
]);

Route::group(['middleware'=>'guest'], function(){

  Route::post('/loging', ['uses'=>'staffController@postlogin',
  'as'=>'log_in'
  ]);
  Route::get('/login',['uses'=>'staffController@getlogin',
  'as'=>'login'
  ]);

});




  Route::get('/hospital', function () {
      return view('Administrator.hospital');
  });
  Route::get('/hospitals', function () {
      return view('Administrator.viewhospital');
  });
  Route::get('/ward', function () {
      return view('Administrator.ward');
  });
  Route::get('/wards', function () {
      return view('Administrator.viewward');
  });






///////////////////////////////////////////////////// Administrator $ staff


//////////////////////////////////////////////////// receptionist
Route::get('/register', function(){
  return view('reception.registerpatient');
});
Route::get('/registers', function(){
  return view('reception.viewpatientreg');
});
Route::get('/admit', function(){
  return view('reception.admitingpatient');
});
Route::get('/admits', function(){
  return view('reception.viewpatientadmit');
});
////////////////////////////////////////////////////////end reception

/////////////////////////////////////////////////////// pharmacy
Route::get('/prescribe', function(){
  return view('pharmacy.prescription');
});
Route::get('/prescribes', function(){
  return view('pharmacy.viewprescription');
});
/////////////////////////////////////////////////// end pharmacy

////////////////////////////////////////////////// patient
Route::get('/appointment', function(){
  return view('patient.appointment');
});
Route::get('/appointments', function(){
  return view('patient.viewappointment');
});
Route::get('/file', function(){
  return view('patient.patientfile');
});
Route::get('/files', function(){
  return view('patient.viewpatientfile');
});
///////////////////////////////////////////// end patient

/////////////////////////////////////////// nurse
Route::get('/check', function(){
  return view('nurse.patientcheck');
});
Route::get('/checks', function(){
  return view('nurse.viewpatientcheck');
});
////////////////////////////////////// end nurse

/////////////////////////////////////// lab
Route::get('/lab', function(){
  return view('lab.labform');
});
Route::get('/labs', function(){
  return view('lab.viewlabform');
});
//////////////////////////////////// end lab

////////////////////////////////////////// doctor
Route::get('/diagnosis', function(){
  return view('doctor.diagnosis');
});
Route::get('/diagnosised', function(){
  return view('doctor.viewdiagnosis');
});
Route::get('/labrequest', function(){
  return view('doctor.labrequest');
});
Route::get('/labrequests', function(){
  return view('doctor.viewlabrequest');
});
Route::get('/patientfile', function(){
  return view('doctor.patientfile');
});
Route::get('/patientfiled', function(){
  return view('doctor.viewpatientfile');
});
Route::get('/prescription', function(){
  return view('doctor.prescription');
});
Route::get('/prescriptions', function(){
  return view('doctor.viewprescription');
});
//////////////////////////////////// end doctor
