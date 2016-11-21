<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Payables', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('StudentNo',30);
            $table->decimal('Amount',8,2);
            $table->string('Description');
            $table->date('DueDate');
            $table->boolean('Paid');

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
        Schema::dropIfExists('Payables');
    }
}
