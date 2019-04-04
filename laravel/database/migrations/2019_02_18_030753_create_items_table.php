<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {

            $table->increments('id');

            $table->text('cafe')->nullable();

            $table->text('almoco')->nullable();

            $table->text('jantar')->nullable();

            $table->text('almoco_vegetariano')->nullable();

            $table->text('jantar_vegetariano')->nullable();
 
            //$table->string('title')->nullable();   
 
           // $table->text('description')->nullable();

            $table->date('data')->nullable();
 
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
        Schema::dropIfExists('items');
    }
}
