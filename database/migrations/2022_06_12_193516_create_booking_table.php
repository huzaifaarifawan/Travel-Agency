<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Booking', function (Blueprint $table) {
            $table->id();
            $table->char('destination',20);
            $table->integer('howMany');
            $table->date('arrival');
            $table->date('leaving');
            $table->string('contact');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Booking');
    }
};
