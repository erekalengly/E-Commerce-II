<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmpController extends Controller
{
    //
    public function register_emp(Request $req){
        $name = $req -> name;
        $gender = $req -> gender;
        $email = $req -> email;
        $phone = $req -> phone;
        $role = $req -> position;
        $id_dept = $req -> dept_id; 
        $id_degree = $req -> degree_id;
        
      
          #createmodelsavedatabase
       $new_data = new Employee([
        'name' => $name,
        'gender' => $gender,
        'email' => $email,
        'phone' => $phone,
        'position' => $role,
        'dept_id' => $id_dept,
        'degree_id' => $id_degree
       ]);
       $new_data -> save();
       return response()->json($new_data);
    }       


    public function get_all_emps (Request $req){
        $employees = Employee::all();
        return response() -> json(['new_employee' => $employees], 200);
        //dd($employees);
    }

    public function get_by_id (Request $req){
        $limit = $req ->  limit;
        $offset = $req -> offset;
        $new_data = Employee::all()->skip($offset)->take($limit);
        return response() -> json(['data' => $new_data], 200);
    }

    // public function update_emp (Request $req){
    //     $new_khmername = $req -> new_khmer_name;       
    //     $new_latinname = $req -> new_latin_name;                 
    //     $new_dept = $req -> new_department;
    //     $new_phnum = $req -> new_phonenumber;
    //     $new_role = $req -> new_relatedrole;


    //     $update_query = Employee::where('id', $employee_id)
    //         -> update([
    //             'namekh' => $new_khmername,
    //             'namelatin' => $new_latinname,
    //             'department' => $new_dept,
    //             'phonenumber' => $new_phnum,
    //             'role' => $new_role
    //         ]);
    //     if ($update_query == 0){
    //         return response() -> json(['message' => 'Employee not found'], 200);
    //     }    
    //     return response() -> json(['message' => $req -> all()], 200);
    //     //dd('hi');
    // }

    public function delete_emp(Request $req){
        $emps_id = $req -> employee_id;
       // dd($client_id);

       $delete_query = Employee::where('id', $emps_id)->delete();
       if ($delete_query == 0){
        return response() -> json(['message' => 'Employee not found'], 200);
        }  
       return response() -> json(['message' => 'delete successful']);

       //return response() -> json(['message' => $req -> all()], 200);
    }

}
