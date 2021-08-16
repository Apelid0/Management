<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        //$users = auth()->user();
        //$enrol_subjects = $users->enrol[0]->enrol_subject;
        //$courses = $enrol_subjects[0]->course_content->school_course->course->name;

        //return view('dashboard', compact('courses'));
        return view('dashboard');
    }
}
