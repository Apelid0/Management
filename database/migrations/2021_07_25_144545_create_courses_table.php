<?php

use App\Models\Course;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $data =  array(
            [
                'name' => 'Engenharia Informática',
            ],
            [
                'name' => 'Desporto',
            ],
            [
                'name' => 'Enfermagem',
            ],
        );

        foreach ($data as $datum){
            $entry = new Course();
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
        Schema::dropIfExists('courses');
    }
}
