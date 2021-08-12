<?php

use App\Models\Teache;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_content_id');
            $table->foreignId('work_id');
            $table->timestamps();
        });

        $data =  array(
            [
                'course_content_id' => '1',
                'work_id' => '1',
            ],
            [
                'course_content_id' => '2',
                'work_id' => '2',
            ],
            [
                'course_content_id' => '3',
                'work_id' => '3',
            ],
        );

        foreach ($data as $datum){
            $entry = new Teache();
            $entry->course_content_id =$datum['course_content_id'];
            $entry->work_id =$datum['work_id'];
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
        Schema::dropIfExists('teaches');
    }
}
