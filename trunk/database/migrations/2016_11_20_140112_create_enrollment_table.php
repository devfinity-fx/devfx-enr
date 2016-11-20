<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrollmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Enrollment', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('StudentNo',30);
            $table->integer('CourseID')->unsigned();
            $table->enum('Type',['R','T'])->default('R');
            $table->dateTime('DateEnrolled');
            $table->string('RegisteredBy',30);
            $table->timestamps();

            $table->foreign('StudentNo')
                ->references('StudentNo')->on('Students')
                ->onDelete('cascade');

            $table->foreign('CourseID')
                ->references('ID')->on('Courses')
                ->onDelete('cascade');

            $table->foreign('RegisteredBy')
                ->references('Username')->on('Accounts')
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
        Schema::dropIfExists('Enrollment');
    }
}
