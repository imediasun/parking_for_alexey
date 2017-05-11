<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('adv', function (Blueprint $table) {
        $table->increments('id');
        $table->string('main_text');
        $table->string('img_url');
        $table->bigInteger('section');
        $table->string('second_text');
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
        Schema::dropIfExists('adv');
    }
}
