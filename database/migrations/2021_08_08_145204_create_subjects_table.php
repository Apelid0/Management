<?php

use App\Models\Subject;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $data =  array(
            [
                'name' => 'Física Aplicada à Computação',
            ],
            [
                'name' => 'Matemática Discreta',
            ],
            [
                'name' => 'Programação Orientada por Objetos',
            ],
            [
                'name' => 'Sistemas Digitais',
            ],
            [
                'name' => 'Databases 1',
            ],
            [
                'name' => 'Estatística Aplicada',
            ],
            [
                'name' => 'Desenvolvimento e Aprendizagem Motora',
            ],
            [
                'name' => 'Anatomia Funcional do Aparelho Locomotor',
            ],
        );

        foreach ($data as $datum){
            $entry = new Subject();
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
        Schema::dropIfExists('subjects');
    }
}
