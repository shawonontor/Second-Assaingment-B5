<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(Request $request)
    {   
        $id = $request->id;
        $name = "Donald Trump";
        $age = "80";

        $data = [
            "id" => $id,
           "name" => $name,
           "age" => $age
        ];
//Cookie-start
        $name_c = "access_token";
        $value = "123_xyz";
        $minutes = time()+ 60;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;
       
        return response($data,200)->cookie(

            $name_c ,
            $value ,
            $minutes,
            $path,
            $domain,
            $secure,
            $httpOnly

        );

        
    }



}
