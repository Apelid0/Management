<?php

use App\Models\Building;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('postal')->nullable();
            $table->string('council')->nullable();
            $table->string('district')->nullable();
            $table->timestamps();
        });

        $data =  array(
            [
                'school_id' => '1',
                'name' => 'Edificio 1',
                'city' => 'Coimbra',
            ],
            [
                'school_id' => '1',
                'name' => 'Edificio 2',
                'city' => 'Coimbra',
            ],
            [
                'school_id' => '2',
                'name' => 'Edificio Beta',
                'city' => 'Lisboa',
            ],
        );

        foreach ($data as $datum){
            $entry = new Building();
            $entry->school_id =$datum['school_id'];
            $entry->name =$datum['name'];
            $entry->city =$datum['city'];
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
        Schema::dropIfExists('buildings');
    }
}
