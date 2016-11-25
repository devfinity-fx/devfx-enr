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
            $table->integer('SectionID')->unsigned();
            $table->enum('Status',['E','T','G','D'])->default('E');
            $table->tinyInteger('GradeLevel');
            $table->smallInteger('AcademicYear');
            $table->dateTime('DateEnrolled');
            $table->string('RegisteredBy',30);
            $table->timestamps();

            $table->foreign('StudentNo')
                ->references('IDNo')->on('Accounts')
                ->onDelete('cascade');

            $table->foreign('SectionID')
                ->references('ID')->on('Sections')
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
