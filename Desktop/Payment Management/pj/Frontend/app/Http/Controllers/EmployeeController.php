<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EmployeeController extends Controller
{
    //

    public function homepage(){
        $http = new \GuzzleHttp\Client();


        // $response = $http -> get('http://127.0.0.1:8000/api/employee_route/get_emps');

        // if($response -> getStatusCode() != 200){
        //     return view('homepage');


        // }
        // $result = json_decode((string)$response -> getBody(), true);
       // dd($result["new_employee"]);
       return view('homepage');


    }
 
    public function employee_page(){
       
        $http = new \GuzzleHttp\Client();

        $response = $http -> get('http://127.0.0.1:8000/api/employee_route/get_employee');
        $result = json_decode((string)$response -> getBody(), true)['new_employee'];
        //dd($result);
        $academic_year = $http -> get('http://127.0.0.1:8000/api/academicYear_route/get_Academicyear');
        $academic_year_result = json_decode((string)$academic_year -> getBody(), true)['new_academic_year'];


        $degree = $http -> get('http://127.0.0.1:8000/api/degree_route/gets_degree');
        $degree_result = json_decode((string)$degree -> getBody(), true)['new_degree'];
        //dd($degree_result);
        $department = $http -> get('http://127.0.0.1:8000/api/dept_route/gets_dept');
        $department_result = json_decode((string)$department -> getBody(), true)['new_department'];
        //dd($department_result);
        $course = $http -> get('http://127.0.0.1:8000/api/course_route/gets_course');
        $course_result = json_decode((string)$course -> getBody(), true)['new_course'];
        //dd($course_result);
        $position = $http -> get('http://127.0.0.1:8000/api/position_route/gets_position');
        $position_result = json_decode((string)$position -> getBody(), true)['new_position'];
        //dd($position_result);
        $main_salary = $http -> get('http://127.0.0.1:8000/api/Main_salary_route/gets_salary');
        $main_salary_result = json_decode((string)$main_salary -> getBody(), true)['new_salary'];
        //dd($main_salary_result);
        $hour_salary = $http -> get('http://127.0.0.1:8000/api/hourSalary_route/get_allhourSalary');
        $hour_salary_result = json_decode((string)$hour_salary -> getBody(), true)['new_hour_salary'];
        //dd($hour_salary_result);
        // dd($result);
        return view('Employee', [
         'employees' => $result['emp'], 
         'employees1' => $result['emp1'],
         'academic_year'=> $academic_year_result,
         'degree' => $degree_result,
         'department' => $department_result,
         'course' => $course_result,
         'position' => $position_result,
         'main_salary' => $main_salary_result,
         'hour_salary' => $hour_salary_result 
        ]);

    }

    public function create_employee(Request $req){
        //dd($req -> all());

        $http = new \GuzzleHttp\Client();
        $employeebody = [

            "name" => $req ->firstname.' '.$req ->lastname,
            "academic_year_id" => $req ->academic_year,
            "gender" => $req->gender,
            "email" => $req->email,
            "phone"=> $req->phone,
            "position_id" => $req->position,
            "department_id"=> $req->department,
            "course_id"=> $req->course,
            "degree_id"=>$req->degree,
            "start_date"=>$req ->start_date,
            "main_salary_id"=> $req->main_salary,
            "hour_salary_id" => $req->hour_salary
        ];

        //dd($employeebody);
        $response3 = $http -> post('http://127.0.0.1:8000/api/employee_route/input_emp', ['form_params' => $employeebody]);
        $result3 = json_decode((string)$response3 -> getBody(), true);
        
        return back();
        //     $response = $http -> get('http://127.0.0.1:8000/api/employee_route/get_employee');
        // $result = json_decode((string)$response -> getBody(), true)['new_employee'];
        //  dd($result);
    }


    public function delete_emp(Request $request){
        $http = new \GuzzleHttp\Client();

        $emp_id = $request -> emp_id;
        //dd($emp_id);
 
         $response = $http -> delete('http://127.0.0.1:8000/api/employee_route/delete_emp_by_id?employee_id='.$emp_id);
         $results = json_decode((string)$response -> getBody(), true);
         return back();
    }

    public function get_emp(Request $request){
        
        $http = new \GuzzleHttp\Client();
        $emp_id = $request -> emp_id;
        //dd($emp_id);
 
         $response = $http -> get('http://127.0.0.1:8000/api/employee_route/get_emp_by_id?employee_id='.$emp_id);
         $results = json_decode((string)$response -> getBody(), true);
         //dd($results);
         return back();
        

    }


    public function update_employee(Request $request){
        // dd($request -> all());
        $http = new \GuzzleHttp\Client();
        $emp_id = $request -> employee_id;
        $name = $request -> firstname.' '.$request -> lastname;
        $gender = $request -> gender;
        $department = $request -> department;
        // $degree = $request -> degree;
        $course = $request -> course;
        $email = $request -> email;
        $phone = $request -> phone;
        $position = $request -> position;
        
        $request_object = [
            'employee_id' => $emp_id,
            'name' => $name,
                'gender' => $gender,
                'email' => $email,
                'phone' => $phone,
                'position_id' => $position,
                'department_id' => $department,
                'course_id' => $course,
                // 'degree_id' => $degree,
                // 'main_salary_id' => $new_main_salary_id,
                // 'hour_salary_id' => $new_hour_salary_id
        ]; 
        
         $response = $http -> post('http://127.0.0.1:8000/api/employee_route/update_emp_by_id', ['form_params' => $request_object]);
         $results = json_decode((string)$response -> getBody(), true);
 
         return back();

    }

}
