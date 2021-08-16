<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeacheController extends Controller
{
    public function index(){
        $teacher_list = collect();
        //all teachers
        $teachers = User::all()->where('role', 'teacher');
        //$teachers = $users->teache;
        foreach ($teachers as $teacher) {
            $works = $teacher->work;
            //Nome do Professor
            //print($works);
            foreach ($works as $work) {
                $teaches = $work->teache;
                //Nome do Professor
                //print($teaches);
                foreach ($teaches as $teache) {
                    $teache_subject = $teache->course_content->subject->name;
                    //Disciplina do Professor
                    //print($teache_subject);

                    $teacher_list->prepend([
                        'name' => $teacher->name,
                        'subject' => $teache_subject,
                    ]);
                }
            }
        }

        print($teacher_list);

        return view('teacher', compact('teacher_list', 'teachers'));
    }


    public function update(){

        return view('teacher');
    }

    public function delete(){

        return view('teacher');
    }
}
