<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDocumentCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_doc_cate', function (Blueprint $table){
            $table->integer('user_id')->comment('user number'); //user number
            $table->integer('doc_cate_id')->comment('document cate number'); //document cate number
            $table->boolean('upload_auth')->default(0)->comment('upload authorities - 1-upload 0-not upload');  //upload authorities - 1-upload 0-not upload
            $table->boolean('active')->default(0)->comment('active status 1-active 0-inactive');  //active status 1-active 0-inactive
            $table->timestamps();
            $table->index(['user_id', 'doc_cate_id'], 'user_doc_cate_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_doc_cate');
    }
}
