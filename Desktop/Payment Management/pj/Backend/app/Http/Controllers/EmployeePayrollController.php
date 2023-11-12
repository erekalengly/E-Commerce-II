<?php

namespace App\Http\Controllers;

use App\Models\EmployeePayroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmployeePayrollController extends Controller
{
    //

    public function register_emppayroll(Request $req){
        $employee_id = $req -> employee_id;
        $total_hour = $req -> total_hour;
        $project_inc = $req -> project_inc;
        $payroll_date = $req -> payroll_date;
        $total_monthly_payroll=$req -> total_monthly_payroll;


        #createmodelsavedatabase
        $new_emppayroll = new EmployeePayroll([
            'employee_id' => $employee_id,
            'total_hour' => $total_hour,
            'project_inc' => $project_inc,
            'payroll_date' => $payroll_date,
            'total_monthly_payroll' => $total_monthly_payroll

        ]);

        $new_emppayroll -> save();
        return response()->json($new_emppayroll);
        //dd($new_emppayroll);

    }
     public function get_emppayroll (Request $req){
        // $emppayroll = EmployeePayroll::all();
        // return response() -> json(['new_employee_payroll' => $emppayroll], 200);
        // dd($emppayroll);
        $emppayroll = DB::table('employee') 
        -> join('main_salary','employee.main_salary_id', '=', 'main_salary.id')
        -> select('employee.*','main_salary.amount as main_salary_amount')
        -> get();


        $emppayroll1 = DB::table('employee') 
        -> join('course','employee.course_id', '=', 'course.id')
        -> join('main_salary','employee.main_salary_id', '=', 'main_salary.id')
        -> join('hour_salary', 'employee.hour_salary_id','=', 'hour_salary.id' )
        -> select('employee.*','course.name as course_name','main_salary.amount as main_salary_amount','hour_salary.amount as hour_salary_amount')
        -> get();

        $response_obj=['emppayroll'=> $emppayroll, 'emppayroll1'=> $emppayroll1];
        return response() -> json(['new_employee_payroll' => $response_obj], 200);
        dd($response_obj);
     }

}
