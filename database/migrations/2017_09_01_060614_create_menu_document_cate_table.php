<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuDocumentCateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_document_cate', function (Blueprint $table){
            $table->integer('menu_id')->comment('menu number');
            $table->integer('doc_cate_id')->comment('document_cate_id');
            $table->index(['menu_id', 'doc_cate_id'], 'menu_document_cate_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_document_cate');
    }
}
