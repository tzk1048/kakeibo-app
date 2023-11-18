<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentShortcutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_shortcuts', function (Blueprint $table) {
            $table->id();
            $table->string('name',30)->nullable();
            $table->date('movedate')->nullable();
            $table->integer('price')->nullable();
            $table->integer('payment_id')->nullable();
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->integer('bank_id')->nullable();
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->string('comment',50)->nullable();
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
        Schema::dropIfExists('payment_shortcuts');
    }
}
