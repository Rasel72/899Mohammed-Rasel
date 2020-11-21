<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
   public function all()
   {
   	$std=Department::all();
   	return view('department',['data'=>$std]);
   }
}
