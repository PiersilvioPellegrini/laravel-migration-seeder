<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->timestamps();
            $table->string("azienda");
            $table->string("stazione_di_arrivo")->default("roma");
            $table->string("stazione_di_partenza")->default("milano");
            $table->dateTime("orario_di_partenza");
            $table->dateTime("orario_di_orario");
            $table->int("codice_treno")->nullable();
            $table->int("numero_carozze")->nullable();
            $table->boolean("in_orario")->nullable();
            $table->boolean("cancellato")->nullable();

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
};
