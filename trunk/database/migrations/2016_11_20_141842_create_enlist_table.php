<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Enlistment', function (Blueprint $table) {
            $table->increments('ID')->primary();
            $table->string('StudentNo',30);
            $table->integer('SectionID')->unsigned();
            $table->integer('MatrixID')->unsigned();
            $table->decimal('RemainingBalance',8,2);
            $table->dateTime('DateEnlisted');
            $table->string('EnlistedBy');
            $table->timestamps();


            $table->foreign('StudentNo')
                ->references('StudentNo')->on('Students')
                ->onDelete('cascade');

            $table->foreign('SectionID')
                ->references('ID')->on('Sections')
                ->onDelete('cascade');

            $table->foreign('MatrixID')
                ->references('ID')->on('Matrix')
                ->onDelete('cascade');

            $table->foreign('EnlistedBy')
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
        Schema::dropIfExists('Enlistment');
    }
}
