<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


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
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('mobileno');
            $table->string('password');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('panno');
            $table->string('permanent_address');
            $table->string('temporary_address');
            $table->string('district');
            $table->string('city');
            $table->integer('title');
            $table->integer('department');
            $table->integer('level');
            $table->integer('roleid');
            $table->string('joined_date');
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
        Schema::dropIfExists('users');
    }
}
