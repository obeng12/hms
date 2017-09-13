<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\staff;
use App\role;
use Yajra\DataTables\Facades\DataTables;
use Auth;
class staffController extends Controller
{
    public function geti(){
      $table = role::all();
      return view('staff.createstaff',['table' => $table]);
    }
    public function poststaff(Request $request){
       $this->validate($request,[
         'email'=>'email|required|unique:staff',
         'password'=>'required|min:4'
       ]);

$new = new staff([
  'staffID'=>$request->input('staffid'),
  'hospitalID'=>$request->input('hospitalID'),
  'firstname'=>$request->input('firstname'),
  'middlename'=>$request->input('middilename'),
  'surname'=>$request->input('surname'),
  'pos'=>$request->input('pos'),
  'email'=>$request->input('email'),
  'password'=>bcrypt($request->input('password')),
  'number'=>$request->input('number'),
  'gen'=>$request->input('gen'),
  'department'=>$request->input('department'),

]);
$new->save();
return redirect()->route('staffs');
}
public function getstaffview(){
  return view('staff.viewstaff');
}

public function staffData()
  {
      return DataTables::eloquent(staff::query())->toJson();

  }
  public function getlogin(){
    return view('staff.login');
  }
  public function postlogin(Request $request){
    $this->validate($request,[
      'email'=>'email|required',
      'password'=>'required|min:4'
    ]);
if (Auth::attempt(['email'=>$request->input('email'), 'password'=>$request->input('password')])){
return redirect()->route('addingstaff');
}
return redirect()->back();
  }
  public function getlogout(){
    Auth::logout();
      return redirect()->route('login');
  }
  public function getrole(){
    return view('Administrator.addrole');
  }
  public function postrole(Request $request){
    $new = new role([
'rolename'=>$request->input('rolename')
    ]);
    $new->save();
    return redirect()->route('viewrole');
  }
  public function getroleview(){
    return view('Administrator.viewaddrole');
  }
}
