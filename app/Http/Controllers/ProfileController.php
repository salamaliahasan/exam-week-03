<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    function index(Request $request){
        $id=$request->id;
        $name = "Donald Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];


        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = '120';
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        $response = new Response($data, 200);
        $response->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);

        return $response;
    }
}
