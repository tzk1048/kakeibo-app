<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentCurrentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_currents', function (Blueprint $table) {
            $table->id();
            $table->date('movedate');
            $table->integer('price');
            $table->integer('payment_id');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->integer('bank_id');
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->string('comment',50);
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
        Schema::dropIfExists('payment_currents');
    }
}
