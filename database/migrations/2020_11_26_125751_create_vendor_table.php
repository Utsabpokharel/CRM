<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->date('dateofbirth');
            $table->string('registrationnumber')->nullable();
            $table->string('panvatnumber')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('city');
            $table->string('district');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->enum('vendor_type', ['Organization', 'Individual']);
            $table->string('firstcontactperson')->nullable();
            $table->string('firstemail')->nullable();
            $table->string('firstphone')->nullable();
            $table->string('secondcontactperson')->nullable();
            $table->string('secondemail')->nullable();
            $table->string('secondphone')->nullable();
            $table->tinyinteger('ifuser')->default(0);
            $table->string('frontcitizenshipimage')->nullable();
            $table->string('backcitizenshipimage')->nullable();
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
        Schema::dropIfExists('vendors');
    }
}