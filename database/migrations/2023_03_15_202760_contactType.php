<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactType extends Migration
{
    public function up()
    {
        Schema::create('contactType', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            $table->string('name',255);
            $table->string('icon',255);
            // $table->integer('personId')->unsigned();

        });
    }


    public function down()
    {
        Schema::dropIfExists('contactType');
    }
}