<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('departure_id')->unsigned();
            $table->bigInteger('arrival_id')->unsigned();
            $table->integer('est_distance');
            $table->integer('est_time');
            $table->text('est_price');
            $table->timestamps();
            $table->foreign('departure_id')
                ->references('id')->on('city')
                ->onUpdate('cascade');
            $table->foreign('arrival_id')
                ->references('id')->on('city')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
