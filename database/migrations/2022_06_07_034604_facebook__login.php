<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FacebookLogin extends Migration
{
    public function up()
    {
        Schema::table('users',	function($table){	
            $table->string('facebook_user_id')->nullable();	
        });	
    }

    public function down()
    {
        //
    }
};
