<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatrixTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Matrix', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('SectionID')->unsigned();
            $table->integer('BreakdownID')->unsigned();
            $table->timestamps();

            $table->foreign('SectionID')
                ->references('ID')->on('Sections')
                ->onDelete('cascade');

            $table->foreign('BreakdownID')
                ->references('ID')->on('Breakdown')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Matrix');
    }
}
