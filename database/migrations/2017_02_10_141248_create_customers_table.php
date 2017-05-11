<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned()->default(1);
            $table->string('name');
            $table->string('edrpou');
            $table->string('bank');
            $table->string('mfo');
            $table->bigInteger('account');
            $table->string('city');
            $table->string('street');
            $table->integer('house');
            $table->integer('code');
            $table->integer('ofice');
            $table->integer('index');
            $table->foreign('id_user')->references('id')->on('users');
            $table->rememberToken();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('customers');
    }
}
