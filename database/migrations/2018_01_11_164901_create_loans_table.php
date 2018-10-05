<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->decimal('amount')->default(0);
            $table->date('start_date');
            $table->decimal('remaining_amount')->default(0);
            $table->integer('per_month')->default(0);
            $table->integer('duration')->default(0);
            $table->boolean('status');
            $table->timestamp('deadline');
            $table->string('type');
            $table->decimal('rate');
            $table->date('created_date');
            $table->decimal('total_interest');
            $table->decimal('total_amount');
            $table->decimal('principal_amount');
            $table->decimal('processing_fee');
            $table->decimal('fine');

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
        Schema::dropIfExists('loans');
    }
}
