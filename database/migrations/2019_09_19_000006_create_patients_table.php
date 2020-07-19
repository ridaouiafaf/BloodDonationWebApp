<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->string('phone');

            $table->string('email')->unique();

            $table->unsignedBigInteger('user_id')->unique();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
