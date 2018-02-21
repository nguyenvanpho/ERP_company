<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->text('today_content');
            $table->text('tomorrow_content');
            $table->text('problem');
            $table->integer('user_id')->unsigned();
            $table->integer('attendsion_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('attendsion_id')->references('id')->on('attendsions');
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
        Schema::dropIfExists('reports');
    }
}
