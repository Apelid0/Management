<?php

use App\Models\Enrol;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrols', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_course');
            $table->foreignId('user_id');
            $table->string('grade');
            $table->timestamps();
        });


        $data =  array(
            [
                'school_course' => '1',
                'user_id' => '1',
                'grade' => '2',
            ],
        );

        foreach ($data as $datum){
            $entry = new Enrol();
            $entry->school_course =$datum['school_course'];
            $entry->user_id =$datum['user_id'];
            $entry->grade =$datum['grade'];
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
        Schema::dropIfExists('enrols');
    }
}
