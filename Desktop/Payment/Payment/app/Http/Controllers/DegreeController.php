<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Degree;

class DegreeController extends Controller
{
    public function create_degree (Request $req){
        $type = $req -> degree;

        $new_degree = new Degree ([
            'degree' => $type
        ]) ;
         $new_degree -> save();   
        return response() -> json($new_degree,200);
    }

}
