<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dormitory_id')->nullable();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone', 13);
            $table->string('password');
            $table->string('image')->nullable();
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->timestamps();
            $table->foreign('dormitory_id')->references('id')->on('dormitories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
