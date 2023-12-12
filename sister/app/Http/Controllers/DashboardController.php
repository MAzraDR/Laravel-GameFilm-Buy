<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DashboardController extends Controller
{
    public function index()
    {    
        return view('Pages.dashboard');
    }
}
