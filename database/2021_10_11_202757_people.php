<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class People extends Migration
{
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            $table->string('name',255);
        });
    }


    public function down()
    {
        Schema::dropIfExists('person');
    }
}