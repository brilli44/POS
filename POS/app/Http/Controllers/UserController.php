<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
public function User($id, $name)
{
    return view('user', ['id' => $id, 'name' => $name]);
}

}
