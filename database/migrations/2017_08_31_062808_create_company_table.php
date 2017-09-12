<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table){
            $table->increments('id')->comment('company number');   //company number
            $table->string('company_name', 100)->comment('company name'); //company name
            $table->boolean('active')->default(1)->comment('status 1: active 0:inactive');
            $table->timestamps();   //create and update timestamp
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
