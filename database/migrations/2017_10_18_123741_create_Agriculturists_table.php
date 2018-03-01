<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgriculturistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agriculturists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');	
            $table->string('home_no');    
            $table->string('phone_no', 10)->nullable();	
            $table->string('province_id');	
            $table->string('district_id');	
            $table->string('subdistrict_id');		
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
        Schema::dropIfExists('Agriculturists');
    }
}
