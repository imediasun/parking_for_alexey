<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CteateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name')->default('')->nullable();
            $table->string('first_name')->default('')->nullable();
            $table->string('last_name')->default('')->nullable();
            $table->string('street_house_number')->default('')->nullable();
            $table->string('zip_code')->default('')->nullable();
            $table->string('city')->default('')->nullable();
            $table->boolean('different');
            $table->boolean('active');
            $table->string('install_street_house_number')->default('')->nullable();
            $table->string('install_zip_code')->default('')->nullable();
            $table->string('install_city')->default('')->nullable();
            $table->string('email')->default('')->nullable();
            $table->string('telephone')->default('')->nullable();
            $table->string('reachability')->default('')->nullable();
            $table->string('service')->default('')->nullable();
            $table->string('comments')->default('')->nullable();
            $table->boolean('comments_hidden');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
