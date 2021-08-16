<?php

use App\Models\Employed;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id');
            $table->foreignId('user_id');
            $table->timestamps();
        });


        $data =  array(
            [
                'school_id' => '1',
                'user_id' => '6',
            ],
            [
                'school_id' => '1',
                'user_id' => '7',
            ],
        );

        foreach ($data as $datum){
            $entry = new Employed();
            $entry->school_id =$datum['school_id'];
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
        Schema::dropIfExists('employeds');
    }
}
