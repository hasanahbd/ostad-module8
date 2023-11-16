<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request, $id)
    {
        $name="Donal Trump";
        $age="75";
        $data=[
            'name'=>$name,
            'age'=>$age
        ];
        $cookie = cookie('access_token', '123-XYZ', 1, '/',$request->server('SERVER_NAME'), false, true);
        return response($data, 200)->withCookie($cookie);
    }
}
