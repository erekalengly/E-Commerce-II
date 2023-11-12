<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use GuzzLeHttp\Client;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{
    //
    public function Employee(){
        return view('Employee');
    }
    public function Admindashboard(Request $req){
        $http = new \GuzzleHttp\Client();

       
        $response = $http ->get('http://127.0.0.1:8000/api/user_route/me',[
            'headers' => [
                'Authorization' => 'Bearer '.$req -> cookie('personalToken')
            ]
        ]);
        $result = json_decode((string)$response -> getBody(), true)['user_status'];
        //  dd($result);
         return view('AdminDashboard',['user'=>$result]);
        
    }

    public function payroll(){
        return view('payroll');
    }
    public function LecturerPayment(){
        return view('LecturerPayment');
    }
    public function PaymentHomepage(){
        return view('PaymentHomepage');
    }
    public function History_payroll(){
        return view('History_payroll');
    }
    public function addmember(){
        return view('addmember');
    }

    public function registerpage(Request $req){

        // $http = new \GuzzleHttp\Client();

        // $response = $http -> get('http://127.0.0.1:8000/api/user_route/me',[
        //     'headers' => [
        //         'Authorization' => 'Bearer '.$req -> cookie('personalToken')
        //     ]
        // ]);
        // if ($response -> getStatusCode() == 200)
        //         return redirect('/');
        
        return view('Registerpage');        
    }

    public function register(Request $req){

        $fullname = $req -> username;
        $email = $req -> email;
        $password = $req -> password;

        $http = new \GuzzleHttp\Client();
        $body = [
            'email' => $email,
            'name' => $fullname,
            'password' => $password
        ];
        
        try {
            //code...
            $response = $http ->post('http://127.0.0.1:8000/api/user_route/register_new_user', ['form_params' => $body]);

            if($response -> getStatusCode() == 200){
                return redirect('/login');
            }
        } catch (\Throwable $th) {
            //throw $th;
            return back() -> with ('message', 'user already exist');
        }
        return back() -> with ('message', 'something went wrong');
       

    }
    public function loginpage(Request $req){

        //$http = new \GuzzleHttp\Client();

        // $response = $http ->get('http://127.0.0.1:8000/api/user_route/me',[
        //     'headers' => [
        //         'Authorization' => 'Bearer '.$req -> cookie('personalToken')
        //     ]
        // ]);
        //    //dd($response -> getStatusCode()); 
        // //return view('loginpage');
        // if ($response -> getStatusCode() == 200)
        //         return redirect('/');
        
        return view('loginpage');        
    }

    public function login_handle(Request $req){
        //dd($req -> all());
        $email = $req -> email;
        $password = $req -> password;
        //initial request module
        $http = new \GuzzleHttp\Client();
        //prepare body
        $body = [
            'email' => $email,
            'password' => $password
        ];

        //creeate request
        $response = $http ->post('http://127.0.0.1:8000/api/user_route/login', ['form_params' => $body]);

        if($response -> getStatusCode() == 200){
            return back() -> with ('message', 'username or password incorrect');
        }
        
        //
        $result = json_decode((string)$response -> getBody(), true);
        $token = $result['accessToken'];
        
        return redirect('/Admindashboard') -> cookie('personalToken', $token);
        // dd($token);
        
    }
    public function get_me(Request $req){
        $user = auth('sanctum') -> user();

        if($user == null){
            return response() -> json(['user_status' => "user not found"], 203);
        }
        //dd($user);
        return response() -> json(['user_status' => $user], 200);
    }
   



}
