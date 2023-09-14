<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    //
    public function create_dept (Request $req){
        $dept_name = $req -> name;

        $new_dept = new Department ([
            'name' => $dept_name
        ]) ;
         $new_dept -> save();   
        return response() -> json($new_dept,200);
    }

}
