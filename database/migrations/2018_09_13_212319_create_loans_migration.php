<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansMigration extends Migration
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
            $table->integer('part_id');
            $table->integer('amount')->default(0);
            $table->integer('remaining_amount')->default(0);
            $table->date('start_date');
            $table->integer('per_month')->default(0);
            $table->integer('duration')->default(0);
            $table->boolean('status');
            $table->timestamp('deadline');
            $table->string('type');
            $table->float('interest');
            $table->date('created_date');
            $table->float('total_interest');
            $table->integer('total_amount');
            $table->integer('principal_amount');
            $table->integer('processing_fee');
            $table->integer('fine');

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
