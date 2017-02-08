<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizatoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizatoins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orgname');
            $table->string('orgshortname');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('contactno');
            $table->string('location');
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
        Schema::dropIfExists('organizatoins');
    }
}
