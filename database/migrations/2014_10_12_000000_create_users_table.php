<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('user_name', 20)->unique();
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->string('gender', 7);
            $table->string('email', 50)->unique();
            $table->string('marital_status', 20);
            $table->string('phone', 20)->unique();
            $table->text('place_of_birth');
            $table->string('date_of_birth', 30);
            $table->string('role', 10);
            $table->string('profile', 250);
            $table->string('password', 250);
            $table->string('password_token', 250);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
