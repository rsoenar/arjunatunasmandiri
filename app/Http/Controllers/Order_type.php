<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order_type extends Controller
{
    public function index()
    {
        return view('order-type');
    }
}
