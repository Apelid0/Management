<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(){
        $schools = School::all();

        return view('school', compact('schools'));
    }
}
