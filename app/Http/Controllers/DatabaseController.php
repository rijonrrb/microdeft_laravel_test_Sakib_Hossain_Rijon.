<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Student;
use App\Models\Department;

use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function AddStudent(Request $request){

        $Student = new Student();
        $Student->pname = $request->pname;
        $Student->pcategory = $request->pcategory;
        $Student->pdescription = $request->pdescription;
        $Student->pprice = $request->pprice;
        $Student->sid = Session::getid();
        $result = $Product->save();
        if($result){
          return redirect()->back();
        }
  }
  public function Productlist(){
      $count = Sold::where('sid',Session::getId())->count();
      $lastProducts = Product::paginate(6);
      return view('welcome')->with('lastProducts', $lastProducts)->with('count', $count);
  }
  public function cart(){   
      $Products = Sold::where('sid',Session::getId())->get();
      return view('cart')->with('Products', $Products);
  }
  public function deletecart(Request $request){   
      $result = Sold::where('id',$request->id)->delete();
      if($result)
      {
          return redirect()->back();
      }
      
  }
}
