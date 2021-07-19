<?php

namespace App\Http\Controllers;
use Validator;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function check(Request $req)
    {
        $rules=array(
            "email"=>"required"
        );
        $validator= Validator::make($req->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
        }
        else{
               return "YOu have entered a right email";
             
        }
      
         
    }
}
