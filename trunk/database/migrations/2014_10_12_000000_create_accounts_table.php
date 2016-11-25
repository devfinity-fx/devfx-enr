<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Accounts', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('IDNo',30)->unique();
            $table->string('LastName',30);
            $table->string('FirstName',30);
            $table->string('MiddleName',30)->nullable();
            $table->enum('Gender',['M','F'])->default('M');
            $table->date('DateOfBirth');
            $table->string('StreetAddress',50);
            $table->string('Village',50);
            $table->string('City',50);
            $table->string('Province',50);
            $table->string('Nationality',30);
            $table->enum('CivilStatus',['S','M'])->default('S');
            $table->string('Religion',50);
            $table->string('EmailAddress',50);
            $table->string('ContactNo',50);
            $table->string('Username',30)->unique();
            $table->string('Password',32);
            $table->enum('AccountLevel',['S','T','A','R','Z','D']);
            $table->string('CreatedBy',30);
            $table->rememberToken();
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
        Schema::dropIfExists('Accounts');
    }
}
