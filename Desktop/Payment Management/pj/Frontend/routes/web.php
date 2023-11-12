<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LecturerPaymentController;
use App\Http\Controllers\PayrollController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[EmployeeController::class, 'homepage']);

Route::get('/History_payroll',[UserController::class, 'History_payroll']);
Route::get('/Payroll',[PayrollController::class, 'payroll']);
Route::get('/addmember',[UserController::class, 'addmember']);
Route::get('/Admindashboard',[UserController::class, 'Admindashboard']);
Route::get('/Employee',[EmployeeController::class, 'employee_page']);
Route::get('/PaymentHomepage',[UserController::class, 'PaymentHomepage']);
Route::get('/History_payroll',[UserController::class, 'History_payroll']);
// Route::get('/LecturerPayment',[UserController::class, 'LecturerPayment']);
Route::get('/LecturerPayment',[LecturerPaymentController::class, 'lecturerPayment']);
Route::get('/get_lect_by_id',[LecturerPaymentController::class, 'get_lect_by_id']);
Route::post('/update_lect_by_id',[LecturerPaymentController::class, 'update_lect_by_id']);
Route::delete('/delete_lecturer',[LecturerPaymentController::class, 'delete_lecturer']);



Route::post('/create_employee',[EmployeeController::class, 'create_employee']);
Route::post('/update_employee',[EmployeeController::class, 'update_employee']);
Route::post('/create_payroll',[EmployeeController::class, 'create_payroll']);


Route::get('/get_emp_by_id',[EmployeeController::class, 'get_emp']);
Route::get('/update_emp_by_id',[EmployeeController::class, 'update_emp']);
Route::get('/delete_emp',[EmployeeController::class, 'delete_emp']);



Route::get('/login',  [UserController::Class, 'loginpage']);
Route::post('/loginuser',  [UserController::Class, 'login_handle']);

Route::get('/register', [UserController::Class, 'registerpage']);
Route::post('/registeruser', [UserController::Class, 'register']);




