<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        return view('appointment/index');
    }

    public function crud(){
        return view('dashboard/appointment/index');
    }
}
