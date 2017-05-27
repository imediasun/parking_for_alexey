<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParkingAdvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_adv', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('adv_id')->unsigned()->default(1);
            $table->integer('parking_id')->unsigned()->default(1);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->foreign('adv_id')->references('id')->on('adv')->onDelete('cascade');
            $table->foreign('parking_id')->references('id')->on('parking')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('parking_adv', function (Blueprint $table) {
            //
        });
    }
}
