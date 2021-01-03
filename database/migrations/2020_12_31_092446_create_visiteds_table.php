<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiteds', function (Blueprint $table) {
            $table->id();
            $table->time('visited_time');
            $table->date('visited_date');
            $table->longText('remarks')->nullable();
            $table->string('visitor_name');
            $table->unsignedBigInteger('handled_by');
            $table->string('purpose');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visited');
    }
}