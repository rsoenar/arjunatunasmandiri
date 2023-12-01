<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostController extends Controller
{
    public function index()
    {
        return view('cost_types');
    }
}
