<?php

use App\Models\Work;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_course');
            $table->foreignId('user_id');
            $table->timestamps();
        });


        $data =  array(
            [
                'school_course' => '1',
                'user_id' => '3',
            ],
            [
                'school_course' => '1',
                'user_id' => '4',
            ],
            [
                'school_course' => '1',
                'user_id' => '5',
            ],
        );

        foreach ($data as $datum){
            $entry = new Work();
            $entry->school_course =$datum['school_course'];
            $entry->user_id =$datum['user_id'];
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
        Schema::dropIfExists('works');
    }
}
