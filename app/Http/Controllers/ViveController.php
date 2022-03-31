<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViveController extends Controller
{
    public function index()
    {
        return view('page.vive');
    }
   
}
