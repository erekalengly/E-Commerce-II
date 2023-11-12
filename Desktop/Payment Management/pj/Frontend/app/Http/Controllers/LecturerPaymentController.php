<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LecturerPaymentController extends Controller
{
    //
    public function lecturerPayment(){
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
        return view('LecturerPayment',[
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
        // 'employees1' => $result['emp1']
        

    }

    public function create_lecturerPayment(Request $req){
        $course_id = 0;
        $main_salary_id=0;
        $hour_salary_id=0;

        $http = new \GuzzleHttp\Client();

        // course

        $response2 = $http -> get('http://127.0.0.1:8000/api/course_route/gets_course');
        $results2 = json_decode((string)$response2 -> getBody(), true)['new_course'];


        foreach($results2 as $result){
            if($result['name']== $req -> course){
            $course_id = $result['id'];
          }

         }
         if($course_id==0 ){
             $body = [

                 'name' => $req -> course
             ];

             $response = $http -> post('http://127.0.0.1:8000/api/course_route/input_course', ['form_params' => $body]);
             $result = json_decode((string)$response -> getBody(), true);
             $course_id = $result['id'];

         }

         //main_salary
        $response3 = $http -> get('http://127.0.0.1:8000/api/Main_salary_route/gets_salary');
        $results3 = json_decode((string)$response3 -> getBody(), true)['new_salary'];


        foreach($results3 as $result){
            if($result['name']== $req -> main_salary){
            $main_salary_id = $result['id'];
          }

         }
         if($main_salary_id==0 ){
             $body = [

                 'name' => $req -> main_salary
             ];

             $response = $http -> post('http://127.0.0.1:8000/api/Main_salary_route/create_salary', ['form_params' => $body]);
             $result = json_decode((string)$response -> getBody(), true);
             $main_salary_id = $result['id'];

         }

         //hour_salary
        $response4 = $http -> get('http://127.0.0.1:8000/api/hourSalary_route/get_allhourSalary');
        $results4 = json_decode((string)$response4 -> getBody(), true)['new_hour_salary'];


        foreach($results4 as $result){
            if($result['name']== $req -> main_hour_salary){
            $hour_salary_id = $result['id'];
          }

         }
         if($hour_salary_id==0 ){
             $body = [

                 'name' => $req -> hour_salary
             ];

             $response = $http -> post('http://127.0.0.1:8000/api/Main_salary_route/create_salary', ['form_params' => $body]);
             $result = json_decode((string)$response -> getBody(), true);
             $main_salary_id = $result['id'];

         }



         $payrollbody = [

            "name" => $req ->firstname.' '.$req ->lastname,
            "course_id"=> $course_id,
            "main_salary_id" =>$main_salary_id,
            "hour_salary_id"=>$hour_salary_id,
            "payroll_date" =>$req ->date


        ];

        $response3 = $http -> post('http://127.0.0.1:8000/api/emp_payroll/input_emppayroll', ['form_params' => $payrollbody]);
        $result3 = json_decode((string)$response3 -> getBody(), true);

        return back();

    }
    public function delete_lecturer(Request $request){
        $http = new \GuzzleHttp\Client();

        $emp_id = $request -> emp_id;
        //dd($emp_id);
 
         $response = $http -> delete('http://127.0.0.1:8000/api/employee_route/delete_emp_by_id?employee_id='.$emp_id);
         $results = json_decode((string)$response -> getBody(), true);
         return back();
    }
    public function get_lect_by_id(Request $request){
        $http = new \GuzzleHttp\Client();
        $emp_id = $request -> emp_id;
        //dd($emp_id);
 
         $response = $http -> get('http://127.0.0.1:8000/api/employee_route/get_emp_by_id?employee_id='.$emp_id);
         $results = json_decode((string)$response -> getBody(), true);
         return back();

    }

    public function update_lect_by_id(Request $request){

        $http = new \GuzzleHttp\Client();
        $employee_id = $request -> employee_id;
        $name = $request -> firstname.' '.$request -> lastname;
        $course_id = $request -> course;
        $main_salary_id = $request -> main_salary;
        $hour_salary_id = $request -> hour_salary;
        $start_date = $request -> start_date;
        
        $request_object = [
            'emp_id' => $employee_id,
            'name' => $name,
            'course_id' => $course_id,
            'main_salary_id' => $main_salary_id,
            'hour_salary_id' => $hour_salary_id,
            'start_date'=> $start_date
        ]; 

 
         $response = $http -> post('http://127.0.0.1:8000/api/employee_route/update_salary_emp_by_id', ['form_params' => $request_object]);
         $results = json_decode((string)$response -> getBody(), true);
         return back();

    }

}
