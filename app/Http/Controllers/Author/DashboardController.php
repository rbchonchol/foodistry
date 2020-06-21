<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function profile(){
        return view('backend/author/user/profile');
    }

    public function index(){
        return view('backend/author/Dashboard');
    }
}
