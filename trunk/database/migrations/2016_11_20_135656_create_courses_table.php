<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Courses', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('DepartmentID')->unsigned();
            $table->string('ShortName',20);
            $table->string('Description');
            $table->tinyInteger('Status');
            $table->timestamps();

            $table->foreign('DepartmentID')
                ->references('ID')->on('Departments')
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
        Schema::dropIfExists('Courses');
    }
}
