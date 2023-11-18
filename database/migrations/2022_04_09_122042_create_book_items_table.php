<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_items', function (Blueprint $table) {
            $table->id();
            $table->string('title',100); 
            $table->string('author',100); 
            $table->text('isbn');
            $table->date('datepurchased');
            $table->integer('price');
            $table->timestamps();
            
        });
    }
    /*
    $table->string('name'); 
    $table->dateTime('created_at', $precision = 0); 
    $table->decimal('amount', $precision = 8, $scale = 2); 
    $table->bigInteger('votes'); 
    $table->integer('votes'); 
    $table->text('description'); 
    $table->date('created_at'); 

    */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_items');
    }
}
