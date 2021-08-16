<?php

namespace App\Http\Controllers;

use App\Models\Take;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use stdClass;

class TakeController extends Controller
{
    public function index(){
        $events = collect();
        $users = auth()->user();

        $enrol_subjects = $users->enrol[0]->enrol_subject;
        $teste = $enrol_subjects[0]->course_content->school_course->course->name;
        print($teste);
        foreach ($enrol_subjects as $enrol_subjects_list) {
            //print($enrol_subjects_list);
            $subject_name = $enrol_subjects_list->course_content->subject;

            //nome das disciplinas
            print($subject_name->name);

            $user_schedule = $enrol_subjects_list->take;
            foreach ($user_schedule as $schedule) {
                //informação da aula
                //print($schedule->shift->start);

                $events->prepend([
                    'title' => $schedule->shift->description,
                    'startTime' => $schedule->shift->start,
                    'endTime' => $schedule->shift->end,
                    'daysOfWeek' => $schedule->shift->weekday
                ]);
            }
        }
        //var_dump($events);


        $shedules = [
            [
                'title' => 'trabalhar',
                'startTime' => '15:30:00',
                'endTime' => '16:00:00',
                'daysOfWeek' => '3'
            ],
            [
                'title' => 'trabalhar',
                    'startTime' => '15:30:00',
                    'endTime' => '16:00:00',
                    'daysOfWeek' => '4'
            ]
        ];



        return view('calendar', compact('events', 'users', 'shedules'));
    }
}
