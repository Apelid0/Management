<?php

use App\Models\School;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $data =  array(
            [
                'name' => 'Instituto Superior Miguel Torga',
            ],
            [
                'name' => 'Instituto Superior de Gestão',
            ],
            [
                'name' => 'Instituto Superior Manuel Teixeira Gomes',
            ],
        );

        foreach ($data as $datum){
            $entry = new School();
            $entry->name =$datum['name'];
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
        Schema::dropIfExists('schools');
    }
}
