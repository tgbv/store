<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomePage extends Controller
{
    public function index()
    {
    	return view('homepage', [
    		'PRODUCTS_COUNT' => Session::has('products') ? count(Session::get('products')) : 0,
    	]);
    }
}
