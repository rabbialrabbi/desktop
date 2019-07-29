<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('bus_id');
            $table->text('name');
            $table->text('status')->default('open');
            $table->integer('fare');
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
        Schema::dropIfExists('sits');
    }
}
