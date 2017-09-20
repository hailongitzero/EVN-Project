<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document', function (Blueprint $table){
            $table->increments('id')->comment('document id'); //document id
            $table->string('doc_cd', 10)->comment('document code');
            $table->integer('doc_cate_id')->comment('document category number'); //document category number
            $table->string('doc_name', 100)->comment('document name');  //document name
            $table->string('doc_url')->comment('document link');  //document link
            $table->string('doc_tp')->comment('document format type');   //document format type
            $table->integer('download')->comment('document download quantity');
            $table->integer('upload_user_id')->comment('document upload user id');
            $table->integer('total_time')->nullable()->comment('total complete time');
            $table->date('start_date')->nullable()->comment('document start effect date'); //document start effect date
            $table->date('end_date')->nullable()->default('9999-12-31')->comment('document end effect date');   //document end effect date
            $table->boolean('active')->default(1)->comment('document status 1: active 0:inactive');  //document status 1: active 0:inactive
            $table->timestamps();   //document create and update timestamp
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document');
    }
}
