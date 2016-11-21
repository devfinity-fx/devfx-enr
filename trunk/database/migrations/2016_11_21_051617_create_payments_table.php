<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Payments', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('TransactionID',30);
            $table->integer('ReceiptNo');
            $table->integer('PayableID')->unsigned();
            $table->enum('Type',['C','O','B']);
            $table->string('Attachments' );
            $table->date("DatePaid");
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
        Schema::dropIfExists('Payments');
    }
}
