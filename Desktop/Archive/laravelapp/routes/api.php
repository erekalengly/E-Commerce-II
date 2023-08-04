<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});


Route::group([
    'prefix' => 'product_route'

], function(){
    Route::post('create_new_product', [ProductController::Class, 'create_product']);
    Route::get('get_all_products', [ProductController::Class, 'get_products']);
    Route::delete('delete_product_by_id', [ProductController::Class, 'delete_product']); 


});    

