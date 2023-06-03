<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Department;

class TeacherController extends Controller
{
    public function Registration(){

        $Depts = Department::all();
        return view('registration')->with('Depts', $Depts);
    }
    public function RegistrationSubmit(Request $request){

        $validate = $request->validate([
              "name"=>'required',
              'department_id'=>'required',
              'password'=>'required',
              
          ],
          ['name.required'=>"Name field is required.",
          ]
      );


  
      $userCheck = Teacher::where('name',$request->name)->first();
      if($userCheck){
  
          return redirect()->back()->with('failed', 'name already exist');
      }
      else{
  
        $Teacher = new Auth();
          $Teacher->name = $request->name;
          $Teacher->email = $request->department_id;
          $Teacher->password = md5($request->password);
          $result = $Teacher->save();
          if($result){
              return redirect()->route('login');
          }
          else{
              return redirect()->back()->with('failed', 'Registration Failed');
          }
      }
    }

    public function LoginSubmit(Request $request){

    $loginCheck = Teacher::where('name',$request->name)->where('password',md5($request->password))->first();

    if($loginCheck){
            return  redirect()->route('StudentList');
        }
    else{

        return redirect()->back()->with('failed', 'Incorrect Information');
    }
    }
}
