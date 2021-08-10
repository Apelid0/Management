<?php

use App\Models\SchoolCourse;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id');
            $table->foreignId('course_id');
            $table->timestamps();
        });

        $data =  array(
            [
                'school_id' => '1',
                'course_id' => '1',
            ],
        );

        foreach ($data as $datum){
            $entry = new SchoolCourse();
            $entry->school_id =$datum['school_id'];
            $entry->course_id =$datum['course_id'];
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
        Schema::dropIfExists('school_courses');
    }
}
