<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->decimal('interest');
            $table->integer('duration');
            $table->integer('min_age');
            $table->integer('max_age');
            $table->integer('min_no_people');
            $table->integer('max_no_people');
            $table->decimal('processing_fee');
            $table->float('security_cover');
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
        Schema::dropIfExists('loan_types');
    }
}
