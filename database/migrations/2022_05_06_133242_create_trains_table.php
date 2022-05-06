<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('nome_azienda', 150)->nullable();
            $table->string('stazione_di_partenza', 100)->nullable();
            $table->string('stazione_di_arrivo', 100)->nullable();
            $table->string('orario_di_partenza', 15)->nullable();
            $table->string('orario_di_arrivo', 15)->nullable();
            $table->integer('codice_treno')->nullable();
            $table->tinyInteger('numero_tarrozze')->nullable();
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
        Schema::dropIfExists('trains');
    }
}
