<?php

use App\Models\Shift;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shifts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_room');
            $table->foreignId('course_content');
            $table->string('description');
            $table->string('identifier');
            $table->string('start');
            $table->string('end');
            $table->string('weekday');
            $table->string('status');
            $table->timestamps();
        });

        $data =  array(
            [
                'class_room' => '1',
                'course_content' => '1',
                'description' => 'Aula Prática FC A',
                'identifier' => '11111',
                'start' => '15:00:00',
                'end' => '15:30:00',
                'weekday' => '2',
                'status' => 'on',
            ],
            [
                'class_room' => '1',
                'course_content' => '1',
                'description' => 'Aula Prática FC B',
                'identifier' => '11111',
                'start' => '16:00:00',
                'end' => '16:30:00',
                'weekday' => '2',
                'status' => 'on',
            ],
            [
                'class_room' => '2',
                'course_content' => '2',
                'description' => 'Aula de MD A',
                'identifier' => '11112',
                'start' => '10:00:00',
                'end' => '11:30:00',
                'weekday' => '3',
                'status' => 'on',
            ],
            [
                'class_room' => '2',
                'course_content' => '2',
                'description' => 'Aula de MD B',
                'identifier' => '11112',
                'start' => '12:00:00',
                'end' => '14:30:00',
                'weekday' => '3',
                'status' => 'on',
            ],
            [
                'class_room' => '3',
                'course_content' => '3',
                'description' => 'Aula Prática de POO A',
                'identifier' => '11113',
                'start' => '16:00:00',
                'end' => '18:30:00',
                'weekday' => '4',
                'status' => 'on',
            ],
            [
                'class_room' => '3',
                'course_content' => '3',
                'description' => 'Aula Prática de POO B',
                'identifier' => '11113',
                'start' => '09:00:00',
                'end' => '12:30:00',
                'weekday' => '4',
                'status' => 'on',
            ],
        );

        foreach ($data as $datum){
            $entry = new Shift();
            $entry->class_room =$datum['class_room'];
            $entry->course_content =$datum['course_content'];
            $entry->description =$datum['description'];
            $entry->identifier =$datum['identifier'];
            $entry->start =$datum['start'];
            $entry->end =$datum['end'];
            $entry->weekday =$datum['weekday'];
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
        Schema::dropIfExists('shifts');
    }
}
