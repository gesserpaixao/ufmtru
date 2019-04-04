<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('questao_01',['Regular','Pessimo','Ruim','Bom','Otimo'])->nullable();
            $table->enum('questao_02',['Regular','Pessimo','Ruim','Bom','Otimo'])->nullable();
            $table->enum('questao_03',['Regular','Pessimo','Ruim','Bom','Otimo'])->nullable();
            $table->enum('questao_04',['Regular','Pessimo','Ruim','Bom','Otimo'])->nullable();
            $table->enum('questao_05',['Regular','Pessimo','Ruim','Bom','Otimo'])->nullable();
            $table->date('date');
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
        Schema::dropIfExists('avaliars');
    }
}
