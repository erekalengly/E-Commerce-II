<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
//     return view('homepage');
// });

Route::get('/',  [UserController::Class, 'homepage']);
Route::get('/aboutus', [UserController::Class, 'aboutpage']);
Route::get('/product', [UserController::Class, 'productpage']);
Route::get('/category', [UserController::Class, 'categorypage']);
Route::get('/cart', [UserController::Class, 'cartpage']);
Route::get('/customer', [UserController::Class, 'customerpage']);
Route::get('/payment', [UserController::Class, 'paymentpage']);
Route::get('/thanks', [UserController::Class, 'thankpage']);

Route::get('/login',  [UserController::Class, 'loginpage']);
Route::post('/loginuser',  [UserController::Class, 'login_handle']);

Route::get('/register', [UserController::Class, 'registerpage']);
Route::post('/register', [UserController::Class, 'register']);
