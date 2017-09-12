<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->comment('employee fullname');
            $table->string('username', 20)->unique()->comment('employee name');
            $table->string('password');
            $table->string('email', 100)->unique()->comment('employee email');
            $table->string('phone')->comment('employee telephone');
            $table->string('office_phone')->nullable()->comment('employee office phone');
            $table->string('address')->nullable()->comment('employee address');
            $table->boolean('role')->default(0)->comment('user role 1-admin, 0-user');
            $table->string('emp_cd')->default(2)->comment('employee number');
            $table->integer('dept_id')->comment('department id');
            $table->string('position')->comment('employee position');
            $table->date('join_date')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('employee join date');
            $table->string('img_url')->nullable()->comment('employee avatar image link');
            $table->boolean('active')->default(1)->comment('employee active status 1: active 0:inactive');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
