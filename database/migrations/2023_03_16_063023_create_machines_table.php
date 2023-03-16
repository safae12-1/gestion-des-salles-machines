<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('marque');
            $table->date('dateAchat');
            $table->float('prix');
            $table->unsignedBigInteger('salleid');
            $table->timestamps();

            $table->foreign('salleid')->references('id')->on('salles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('machines');
    }
}