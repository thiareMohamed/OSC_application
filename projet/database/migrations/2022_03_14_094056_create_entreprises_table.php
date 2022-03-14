<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('siege');
            $table->integer('telephone');
            $table->date('dateCreation');
            $table->string('registre');
            $table->string('ninea',15);
            $table->string('siteWeb');
            $table->string('dispositifFormation')->default(false);
            $table->string('organigramme')->default(false);
            $table->string('contrat')->default(false);

            $table->foreignId('quartier_id')->constrainted();
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
        Schema::dropIfExists('entreprises');
    }
}
