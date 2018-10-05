<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuarantorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guarantors', function (Blueprint $table) {

            $table->increments('id');

            //personal details
            $table->string('full_name')->nullable();
            $table->string('relationship')->nullable();
            $table->decimal('average_income')->nullable();
            $table->string('nationality')->nullable();
            $table->string('occupation')->nullable();

            $table->string('phone_number')->nullable();
            $table->string('residence')->nullable();

            $table->boolean('owns_house')->nullable();

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
        Schema::dropIfExists('guarantors');
    }
}
