<?php

use App\Models\CourseContent;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id');
            $table->foreignId('school_course_id');
            $table->string('semester');
            $table->string('curricular_year');
            $table->string('academic_year');
            $table->string('credits');
            $table->string('status');
            $table->timestamps();
        });

        $data =  array(
            [
                'subject_id' => '1',
                'school_course_id' => '1',
                'semester' => '1',
                'curricular_year' => '2020-2021',
                'academic_year' => '1',
                'credits' => '6',
                'status' => 'on',
            ],
            [
                'subject_id' => '2',
                'school_course_id' => '1',
                'semester' => '1',
                'curricular_year' => '2020-2021',
                'academic_year' => '1',
                'credits' => '6',
                'status' => 'on',
            ],
            [
                'subject_id' => '3',
                'school_course_id' => '1',
                'semester' => '1',
                'curricular_year' => '2020-2021',
                'academic_year' => '1',
                'credits' => '6',
                'status' => 'on',
            ],
        );

        foreach ($data as $datum){
            $entry = new CourseContent();
            $entry->subject_id =$datum['subject_id'];
            $entry->school_course_id =$datum['school_course_id'];
            $entry->semester =$datum['semester'];
            $entry->curricular_year =$datum['curricular_year'];
            $entry->academic_year =$datum['academic_year'];
            $entry->credits =$datum['credits'];
            $entry->status =$datum['status'];

            $entry->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_contents');
    }
}
