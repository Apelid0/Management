<?php

namespace App\Http\Controllers;

use App\Models\Take;
use Illuminate\Http\Request;

class TakeController extends Controller
{
    public function index(){
    $shedules = ['title' => 'Dinner',
                'start' => '2021-08-10T15:30:00',
                'end' => '2021-08-10T16:00:00'
    ];

        return view('calendar', compact('shedules'));
    }
}
