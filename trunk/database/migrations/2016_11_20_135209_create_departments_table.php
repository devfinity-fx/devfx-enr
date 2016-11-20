<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Departments', function (Blueprint $table) {
            $table->increments('ID')->primary();
            $table->integer('CollegeID')->unsigned();
            $table->string('ShortName',20);
            $table->string('Description');
            $table->tinyInteger('Status')->default(1);
            $table->timestamps();


            $table->foreign('CollegeID')
                ->references('ID')->on('Colleges')
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
        Schema::dropIfExists('Departments');
    }
}
