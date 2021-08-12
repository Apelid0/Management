<?php

use App\Models\EnrolSubject;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrol_subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_content_id');
            $table->foreignId('enrol_id');
            $table->timestamps();
        });

        $data =  array(
            [
                'course_content_id' => '1',
                'enrol_id' => '1',
            ],
            [
                'course_content_id' => '2',
                'enrol_id' => '1',
            ],
            [
                'course_content_id' => '3',
                'enrol_id' => '1',
            ],
        );

        foreach ($data as $datum){
            $entry = new EnrolSubject();
            $entry->course_content_id =$datum['course_content_id'];
            $entry->enrol_id =$datum['enrol_id'];
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
        Schema::dropIfExists('enrol_subjects');
    }
}
