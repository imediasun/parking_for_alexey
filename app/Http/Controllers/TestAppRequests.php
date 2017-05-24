<?php

namespace App\Http\Controllers;

use App\Parking;
use Illuminate\Http\Request;

class TestAppRequests extends Controller
{
    public function index()
    {
        return view('test_app_requests');
    }
}
