<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_annonce')->nullable();
            $table->string('user_id')->nullable();

            $table->bigInteger('wilaya_D')->nullable();
            $table->string('wilaya_A')->nullable();
            $table->date('Date_D')->nullable();
            $table->date('Date_A')->nullable();
            $table->bigInteger('Taille')->nullable();
            $table->bigInteger('Poids')->nullable();
           // $table->string('transport');


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
        Schema::dropIfExists('annonces');
    }
}
