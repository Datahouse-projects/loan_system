<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->increments('id');
            //persona details
            $table->string('full_name');
            $table->string('date_of_birth');
            $table->string('marital_status');
            $table->string('nationality');
            $table->integer('contact_id');

            //login information
            $table->string('email')->unique();
            $table->string('password');

            //derived attribute
            $table->string('role'); //applicant or guarantor
            $table->boolean("is_verified")->default(false);
            $table->boolean("has_loan")->default(false);


            //financial information
            $table->integer('loan_id')->nullable();
            $table->string('employer')->nullable();  //Government, NGOs
            $table->string('employment_type')->nullable(); //employed or self employed
            $table->integer('average_income')->nullable();

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
        Schema::dropIfExists('parts');
    }
}
