<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class UserController extends Controller
{
    public function homepage(Request $req){
        $http = new \GuzzleHttp\Client();

        $response = $http ->get('http://127.0.0.1:8000/api/product_route/get_all_products?offset=0&limit=4');
        $result = json_decode((string)$response -> getBody(), true);
        //dd($result['data']);
        return view('homepage', ['products'=> $result['data']]);
        
    }

    public function productpage(Request $req){

        return view('product');
    }

    public function cartpage(Request $req){

        $http = new \GuzzleHttp\Client();

        $response = $http ->get('http://127.0.0.1:8000/api/user_route/me',[
            'headers' => [
                'Authorization' => 'Bearer '.$req -> cookie('personalToken')
            ]
        ]);
           //dd($response -> getStatusCode()); 
        //return view('loginpage');
        if ($response -> getStatusCode() == 200)
                return view('Cartpage');

        return redirect('/register');
    }

    public function customerpage(Request $req){
        return view('CustomerInfo');
    }

    public function categorypage(Request $req){
        //return view('Category');
        $http = new \GuzzleHttp\Client();

        $response = $http ->get('http://127.0.0.1:8000/api/product_route/get_all_products?offset=4&limit=3');
        $result = json_decode((string)$response -> getBody(), true);
        $response2 = $http ->get('http://127.0.0.1:8000/api/product_route/get_all_products?offset=4&limit=3');
        $result2 = json_decode((string)$response2 -> getBody(), true);
        $response3 = $http ->get('http://127.0.0.1:8000/api/product_route/get_all_products?offset=4&limit=3');
        $result3 = json_decode((string)$response3 -> getBody(), true);
        //dd($result['data']);
        return view('category', ['products'=> $result['data'],'products2'=> $result2['data'],'products3'=> $result3['data']]);

    }
    public function paymentpage(Request $req){

        return view('payment');
    }

    public function thankpage(Request $req){

        return view('thanks');
    }
    public function aboutpage(Request $req){

        return view('aboutus');
    }

    public function loginpage(Request $req){

        $http = new \GuzzleHttp\Client();

        $response = $http ->get('http://127.0.0.1:8000/api/user_route/me',[
            'headers' => [
                'Authorization' => 'Bearer '.$req -> cookie('personalToken')
            ]
        ]);
           //dd($response -> getStatusCode()); 
        //return view('loginpage');
        if ($response -> getStatusCode() == 200)
                return redirect('/');
        
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

        return redirect('/cart') -> cookie('personalToken', $token);
        dd($token);
    }

    public function registerpage(Request $req){

        $http = new \GuzzleHttp\Client();

        $response = $http -> get('http://127.0.0.1:8000/api/user_route/me',[
            'headers' => [
                'Authorization' => 'Bearer '.$req -> cookie('personalToken')
            ]
        ]);
           //dd($response -> getStatusCode()); 
        //return view('loginpage');
        if ($response -> getStatusCode() == 200)
                return redirect('/');
        
        return view('registerpage');        
    }

    public function register(Request $req){

        $fullname = $req -> fullname;
        $email = $req -> email;
        $password = $req -> password;

        $http = new \GuzzleHttp\Client();
        $body = [
            'email' => $email,
            'name' => $fullname,
            'password' => $password
        ];

        $response = $http ->post('http://127.0.0.1:8000/api/user_route/register_new_user', ['form_params' => $body]);

        if($response -> getStatusCode() == 200){
            return redirect('/login');
        }

        return back() -> with ('message', 'something went wrong');

    }


}
