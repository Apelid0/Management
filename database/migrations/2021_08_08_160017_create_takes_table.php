<?php

use App\Models\Take;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shift_id');
            $table->foreignId('enrol_subject_id');
            $table->timestamps();
        });

        $data =  array(
            [
                'shift_id' => '1',
                'enrol_subject_id' => '1',
            ],
            [
                'shift_id' => '4',
                'enrol_subject_id' => '2',
            ],
            [
                'shift_id' => '5',
                'enrol_subject_id' => '3',
            ],
        );

        foreach ($data as $datum){
            $entry = new Take();
            $entry->shift_id =$datum['shift_id'];
            $entry->enrol_subject_id =$datum['enrol_subject_id'];
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
        Schema::dropIfExists('takes');
    }
}
