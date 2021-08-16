<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index(){

        $events = collect();
        $authUser = auth()->user();
        //Funcionario com sessão iniciada.
        $employee = User::all()->where('name', '=', $authUser->name)->first();
        $employee_employed = $employee->employed;


        foreach ($employee_employed as $employee_school) {
            //print($employee_school->school);
            $school_courses = $employee_school->school->school_course;
            //print($school_courses);

            foreach ($school_courses as $school_course) {
                $courses = $school_course->course_content;

                $course_name = $school_course->course->name;





                foreach ($courses as $course_content) {
                    $shifts = $course_content->shift;

                    foreach ($shifts as $shift) {
                        $events->prepend([
                            'title' => $shift->description,
                            'startTime' => $shift->start,
                            'endTime' => $shift->end,
                            'daysOfWeek' => $shift->weekday
                        ]);
                    }

                }
                break;
            }

        }

        return view('shift', compact('school_courses', 'events', 'course_name'));
    }

    public function create_shift(){

        return view('shift');
    }

    public function search(Request $request){
        $events = collect();
        $authUser = auth()->user();
        //Funcionario com sessão iniciada.
        $employee = User::all()->where('name', '=', $authUser->name)->first();
        $employee_employed = $employee->employed;


        foreach ($employee_employed as $employee_school) {
            //print($employee_school->school);
            $school_courses = $employee_school->school->school_course;
            //print($school_courses);

            foreach ($school_courses as $courses) {

                $course_name = $courses->course->name;


                if($course_name == $request->course){
                    $course_subject = $courses->course_content;
                    //print($course_subject);
                    print("sim");
                    foreach ($course_subject as $subject_shift) {
                        $shifts = $subject_shift->shift;
                        foreach ($shifts as $shift) {
                            $events->prepend([
                                'title' => $shift->description,
                                'startTime' => $shift->start,
                                'endTime' => $shift->end,
                                'daysOfWeek' => $shift->weekday
                            ]);
                        }

                    }
                }else{
                    print("n");
                }
            }
        }
        print($events);
        
        return view('shift', compact('school_courses', 'events', 'course_name'));

    }
}
