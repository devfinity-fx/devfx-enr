<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sections', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('ShortName',30);
            $table->string('Description');
            $table->integer('AcademicMapID')->unsigned();
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
        Schema::dropIfExists('Sections');
    }
}
