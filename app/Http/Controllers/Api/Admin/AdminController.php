<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function dashboard(){
        return 'admin Dashboard';
    }

    public function logout(){
        return 'admin logout';
    }
}
