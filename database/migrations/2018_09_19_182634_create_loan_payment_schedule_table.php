<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanPaymentScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_payment_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->date('payment_date');
            $table->integer('principal_interest');
            $table->integer('total_amount');

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
        Schema::dropIfExists('loan_payment_schedule');
    }
}
