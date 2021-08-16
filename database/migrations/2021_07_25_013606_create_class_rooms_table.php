<?php

use App\Models\ClassRoom;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('building_id');
            $table->string('name');
            $table->string('number_of_seats');
            $table->timestamps();
        });

        $data =  array(
            [
                'building_id' => '1',
                'name' => 'Sala 2',
                'number_of_seats' => '25',
            ],
            [
                'building_id' => '1',
                'name' => 'Sala 3',
                'number_of_seats' => '15',
            ],
            [
                'building_id' => '1',
                'name' => 'Sala 4',
                'number_of_seats' => '20',
            ],
        );

        foreach ($data as $datum){
            $entry = new ClassRoom();
            $entry->building_id =$datum['building_id'];
            $entry->name =$datum['name'];
            $entry->number_of_seats =$datum['number_of_seats'];
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
        Schema::dropIfExists('class_rooms');
    }
}
