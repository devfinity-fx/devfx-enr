<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Students', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('StudentNo',30)->unique();
            $table->string('LastName',50);
            $table->string('FirstName',50);
            $table->string('MiddleName',50)->nullable();
            $table->enum('Gender',['M','F'])->default('M');
            $table->date('DateOfBirth');
            $table->string('StreetAddress',50)->nullable();
            $table->string('Village',50);
            $table->string('City',50);
            $table->string('Province',50);
            $table->string('Nationality',30);
            $table->enum('CivilStatus',['S','M'])->default('S');
            $table->string('Religion',50);
            $table->enum('Status',['R','I','G','T',])->default('R');
            $table->string('EmailAddress',50);
            $table->string('ContactNo',50);
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
        Schema::dropIfExists('Students');
    }
}
