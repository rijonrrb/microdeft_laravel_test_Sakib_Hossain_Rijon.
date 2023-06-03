<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Student;
use App\Models\Department;

use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function AddStudentview(){

        $Depts = Department::all();
        return view('AddStudent')->with('Depts', $Depts);
    }

    public function AddStudent(Request $request){

        $validate = $request->validate([
            "name"=>'required',
            'class'=>'required',
            'student_image'=>'required',
            'department_id'=>'required',
            
        ]
      );
        $Student = new Student();
        $Student->name = $request->name;
        $Student->class = $request->class;
        $Student->date_of_birth = $request->date_of_birth;
        $Student->student_image = $request->student_image;
        $Student->department_id = $request->department_id;
        $result = $Student->save();
        if($result){
            return redirect()->back()->with('success', 'Student added');
          }
          else{
              return redirect()->back()->with('failed', 'There is a problem in Student adding');
          }
  }
  public function StudentList(){
      $Students = Student::paginate(3);
      return view('StudentView')->with('Students', $Students);
  }
  public function deleteStudent(Request $request){   
      $result = Student::where('id',$request->id)->delete();
      if($result)
      {
          return redirect()->back();
      }
      
  }
  public function UpdateStudentView(Request $request){   
    $Student = Student::where('id',$request->id)->first();
    $Depts = Department::all();
    return view('UpdateStudent')->with('Depts', $Depts)->with('Student', $Student);
}

  public function UpdateStudent(Request $request){   
    $Student = Student::where('id',$request->id)->first();
    $Student->name = $request->uname;
    $Student->class = $request->uclass;
    $Student->date_of_birth = $request->udate_of_birth;
    $Student->student_image = $request->ustudent_image;
    $Student->department_id = $request->udepartment_id;
    $result = $Student->save();
    if($result){
        return redirect()->back()->with('success', 'Student Updated');
      }
      else{
          return redirect()->back()->with('failed', 'There is a problem in Student adding');
      }
    
}
}
