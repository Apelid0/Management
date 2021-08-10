<?php

namespace App\Http\Controllers;

use App\Models\Take;
use Illuminate\Http\Request;

class TakeController extends Controller
{
    public function index(){

        return view('calendar');
    }
}
