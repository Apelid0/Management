<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index(){

        print("olaaaaaaaaaaaaaaaaaa");
        return view('shift');
    }

    public function create_shift(){

        return view('shift');
    }
}
