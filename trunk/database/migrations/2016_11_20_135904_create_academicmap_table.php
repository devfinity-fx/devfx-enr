<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicmapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AcademicMap', function (Blueprint $table) {
            $table->increments('ID');
            $table->enum('Semester',['1','2','S'])->default('1');
            $table->string('AcademicYear',10);
            $table->integer('CourseID')->unsigned();
            $table->timestamps();

            $table->foreign('CourseID')
                ->references('ID')->on('Courses')
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
        Schema::dropIfExists('AcademicMap');
    }
}
