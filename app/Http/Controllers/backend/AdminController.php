<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Admin
    public function index()
        {
            return view('backend/login');
        }

        public function home()
        {
            return view('backend.backend_home');
        }

}

