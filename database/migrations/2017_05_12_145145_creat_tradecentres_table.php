<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatTradecentresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tradecentres', function (Blueprint $table) {  
            $table->increments('id');
            $table->integer('id_user')->unsigned()->default(1);
            $table->string('name')->default('')->nullable();;
            $table->string('description')->default('')->nullable();;
            $table->string('image_small')->default(0);
            $table->string('image_medium')->default(0);
            $table->string('image_large')->default(0);
            $table->string('thumbnail')->default(0);
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

        Schema::dropIfExists('tradecentres');
    }
}
