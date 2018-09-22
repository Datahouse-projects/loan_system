<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecurityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('security', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->string('type');
            $table->boolean('verification')->default(false);
            $table->date('issued_date');
            $table->date('expire_date');
            $table->integer('market_value');
            $table->integer('cover_value');
            $table->string('description');
            $table->integer('security_number');
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
        Schema::dropIfExists('security');
    }
}
