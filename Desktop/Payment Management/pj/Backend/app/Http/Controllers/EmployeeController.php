<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    //
    public function register_emp(Request $req){
        //dd($req->all());


        $new_emp = $req -> all();
        Employees::create($new_emp);


        return response()->json($new_emp);
        //dd($new_emp);

    }
     public function get_emp (Request $req){
        // $course = DB::table('employee') 
        // -> join('course','employee.course_id', '=', 'course.id')
        // -> select('course.name as course_name')
        // -> get();
        // // 
        // //dd($emp);
        // $hour_salary = DB::table('employee') 
        // -> join('hour_salary', 'employee.hour_salary_id', '=','hour_salary.id')
        // -> select('hour_salary.amount as hour_salary_amount')
        // -> get();
        $emp = DB::table('employee') 
        -> join('position', 'employee.position_id', '=', 'position.id')
        -> join('department','employee.department_id', '=', 'department.id')
        -> join('degree','employee.degree_id', '=', 'degree.id')
        -> join('main_salary','employee.main_salary_id', '=', 'main_salary.id')
        -> where('employee.course_id',null)
        -> where('employee.hour_salary_id',null) 
        -> select('employee.*','position.type','position.status','department.name as department_name','main_salary.amount as main_salary_amount')
        -> get();

        $emp1 = DB::table('employee') 
        -> join('course','employee.course_id', '=', 'course.id')
        -> join('hour_salary', 'employee.hour_salary_id', '=','hour_salary.id')
        -> join('position', 'employee.position_id', '=', 'position.id')
        -> join('department','employee.department_id', '=', 'department.id')
        -> join('degree','employee.degree_id', '=', 'degree.id')
        -> join('main_salary','employee.main_salary_id', '=', 'main_salary.id')
        -> select('employee.*','position.type','position.status','department.name as department_name','main_salary.amount as main_salary_amount','course.name as course_name','hour_salary.amount as hour_salary_amount')
        -> get();

        $response_object=['emp'=> $emp, 'emp1'=> $emp1];

        return response() -> json(['new_employee' => $response_object], 200);
     }
     

     public function update_emp (Request $req){

        $new_name = $req -> name;
        $emps_id = $req -> employee_id;
        $new_gender = $req -> gender;
        $new_email = $req -> email;
        $new_phone = $req -> phone;
        $new_position_id = $req -> position_id;
        $new_department_id = $req -> department_id;
        $new_course_id = $req -> course_id;

        // $new_main_salary_id = $req -> new_main_salary_id;
        // $new_hour_salary_id = $req -> new_hour_salary_id;
        // $new_degree_id =$req -> new_degree_id;
        // $new_start_date=$req->new_start_date;

        $update_query = Employees::where('id', $emps_id)
            -> update([
                'name' => $new_name,
                'gender' => $new_gender,
                'email' => $new_email,
                'phone' => $new_phone,
                'position_id' => $new_position_id,
                'department_id' => $new_department_id,
                'course_id' => $new_course_id,

                // 'degree_id' => $new_degree_id,
                // 'start_date'=>$new_start_date,
                // 'main_salary_id' => $new_main_salary_id,
                // 'hour_salary_id' => $new_hour_salary_id
            ]);
            
        if ($update_query == 0){
            return response() -> json(['message' => 'Employee not found'], 200);
        }
        return response() -> json(['message' => $req -> all()], 200);
        //dd('hi');
    }

    public function update_salary_emp(Request $req){
        $emp_id = $req -> emp_id;
        $name = $req -> name;
        $course_id = $req -> course_id;
        $main_salary_id = $req -> main_salary_id;
        $hour_salary_id = $req -> hour_salary_id;
        $start_date = $req -> start_date;
        $update_query = Employees::where('id', $emp_id)
            -> update([
                'name' => $name,
                'course_id' => $course_id,
                'main_salary_id' => $main_salary_id,
                'hour_salary_id' => $hour_salary_id,
                'start_date' => $start_date,
            ]);
            if ($update_query == 0){
                return response() -> json(['message' => 'Employee not found'], 200);
            }
            return response() -> json(['message' => $req -> all()], 200);
    }

    public function delete_emp(Request $req){
        $emps_id = $req -> employee_id;
       // dd($client_id);

       $delete_query = Employees::where('id', $emps_id)->delete();
       if ($delete_query == 0){
        return response() -> json(['message' => 'Employee not found'], 200);
        }
       return response() -> json(['message' => 'Delete successful']);

       //return response() -> json(['message' => $req -> all()], 200);
    }
      public function get_by_name (Request $req){

        $emp = Employees::where('name', 'like', "%".$req -> name."%") -> get();
        return response() -> json(['new_employee' => $emp], 200);
    }
    public function get_by_id (Request $req){
        $emps_id = $req -> employee_id;
        $emp = Employees::where('id', $emps_id) -> get();
        return response() -> json(['new_employee' => $emp], 200);
    }


}
