<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table){
            $table->increments('id')->comment('menu number');
            $table->integer('sequence')->comment('menu sort sequence');
            $table->integer('menu_lvl')->comment('menu level');
            $table->integer('menu_prt_id')->comment('menu parent number');
            $table->string('name')->comment('menu name');
            $table->string('menu-url')->comment('menu link');
            $table->boolean('active')->default(1)->comment('menu active status 1-active, 0-inactive');
            $table->boolean('role')->default(0)->comment('edit role 0-only admin using, 1-user');
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
        Schema::dropIfExists('menu');
    }
}
