<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreakdownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Breakdowns', function (Blueprint $table) {
            $table->increments('ID')->primary();
            $table->integer('AcademicMapID')->unsigned();
            $table->string('Description');
            $table->decimal('Amount',8,2);
            $table->timestamps();


            $table->foreign('AcademicMapID')
                ->references('ID')->on('AcademicMap')
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
        Schema::dropIfExists('Breakdowns');
    }
}
