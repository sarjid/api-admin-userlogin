<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function dashboard(){
        return 'user Dashboard';
    }

    public function logout(){
        return 'user logout';
    }
}
