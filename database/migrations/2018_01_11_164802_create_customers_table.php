<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{

    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');

            //persona details
            $table->string('full_name');
            $table->string('date_of_birth')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('nationality')->nullable();
            $table->integer('contact_id')->nullable();

            //login information
            $table->string('email')->unique();
            $table->string('password');

            //derived attribute
            $table->boolean("is_verified")->default(false);
            $table->boolean("has_loan")->default(false);


            //financial information
            $table->integer('loan_id')->nullable();
            $table->string('employer')->nullable();  //Government, NGOs
            $table->string('employment_type')->nullable(); //employed or self employed
            $table->integer('guarantor_id')->nullable();
            $table->string('acc_number')->nullable();
            $table->integer('average_income')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
