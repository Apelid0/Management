<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name')->nullable();
            $table->string('role')->nullable();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('postal')->nullable();
            $table->string('council')->nullable();
            $table->string('district')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        $data =  array(
            [
                'name' => 'mario',
                'role' => 'student',
                'email' => 'mario@mail.com',
                'password' => 'qwerty123',
            ],
            [
                'name' => 'joão',
                'role' => 'student',
                'email' => 'joão@mail.com',
                'password' => 'qwerty123',
            ],
            [
                'name' => 'Marta',
                'role' => 'teacher',
                'email' => 'marta@mail.com',
                'password' => 'qwerty123',
            ],
            [
                'name' => 'Lucas',
                'role' => 'teacher',
                'email' => 'lucas@mail.com',
                'password' => 'qwerty123',
            ],
            [
                'name' => 'Barbara',
                'role' => 'teacher',
                'email' => 'barbara@mail.com',
                'password' => 'qwerty123',
            ],
            [
                'name' => 'Jorge',
                'role' => 'employee',
                'email' => 'jorge@mail.com',
                'password' => 'qwerty123',
            ],
            [
                'name' => 'Sara',
                'role' => 'employee',
                'email' => 'sara@mail.com',
                'password' => 'qwerty123',
            ],
        );

        foreach ($data as $datum){
            $entry = new User();
            $entry->name =$datum['name'];
            $entry->role =$datum['role'];
            $entry->email =$datum['email'];
            $entry->password = Hash::make($datum['password']);
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
        Schema::dropIfExists('users');
    }
}
