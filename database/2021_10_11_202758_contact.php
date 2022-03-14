<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contact extends Migration
{
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            $table->string('type',255);
            $table->string('value',255);
            $table->integer('personId')->unsigned();

        });
    }


    public function down()
    {
        Schema::dropIfExists('contact');
    }
}