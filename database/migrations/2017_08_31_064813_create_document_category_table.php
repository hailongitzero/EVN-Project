<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_cate', function (Blueprint $table){
            $table->increments('id')->comment('document cate number');   //document cate number
            $table->integer('srt_seq')->default(0)->comment('sort sequence');
            $table->string('cate_cd', 3)->comment('document prefix code');
            $table->string('cate_name', 100)->comment('document cate name');    //document cate name
            $table->integer('cate_group',1)->nullable()->comment('document category group');
//            $table->string('folder_url')->comment('folder url to save file');
            $table->boolean('active')->default(1)->comment('active status 1-active 0-inactive');   //active status 1-active 0-inactive
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
        Schema::dropIfExists('document_cate');
    }
}
