<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\DepartmentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group([
    'prefix' => 'user_route'
], function(){

            //http/localhost/user_route/register
                    //in_insomnie                         //function in controller
        Route::post('register_new_user', [UserController::Class, 'register_user']);
      
        Route::put('update_user_by_id', [UserController::Class, 'update_user']);
        Route::delete('delete_user_by_id', [UserController::Class, 'delete_user']); 
        Route::post('login', [UserController::Class, 'login_user']);

        Route::group(['middleware' => 'auth:sanctum'], function (){
            Route::get('get_all_users', [UserController::Class, 'get_users']);
        });

        Route::get('me', [UserController::Class, 'get_me']);



});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'prefix' => 'employee_route'

], function(){
    Route::post('create_emp', [EmpController::Class, 'register_emp']);
    Route::get('get_emps', [EmpController::Class, 'get_all_emps']);
    Route::put('update_employee', [UserController::Class, 'update_emp']);
    Route::delete('delete_employee', [EmpController::Class, 'delete_emp']); 


});   

Route::group([
    'prefix' => 'degree_route'

], function(){
    Route::post('input_degree', [DegreeController::Class, 'create_degree']);

});  

Route::group([
    'prefix' => 'dept_route'

], function(){
    Route::post('input_dept', [DepartmentController::Class, 'create_dept']);

});  