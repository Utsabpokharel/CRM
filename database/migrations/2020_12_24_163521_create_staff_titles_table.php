<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_titles', function (Blueprint $table) {
            $table->unsignedBigInteger('staff_id');

            $table->unsignedBigInteger('title_id');

            $table->foreign('staff_id')->references('id')->on('staff')

                ->onDelete('cascade');

            $table->foreign('title_id')->references('id')->on('titles')

                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_titles');
    }
}
