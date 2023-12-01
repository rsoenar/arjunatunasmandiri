<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cost extends Controller
{
    public function index()
    {
        return view('cost-type');
    }
}
