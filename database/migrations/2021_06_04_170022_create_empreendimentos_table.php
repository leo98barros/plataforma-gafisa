<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpreendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empreendimentos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('area');
            $table->integer('height')->nullable();
            $table->integer('width')->nullable();
            $table->tinyInteger('units')->default(0);
            $table->string('address');

            $table->foreignId('localidade_id')->references('id')->on('localidades');
            $table->foreignId('status_id')->references('id')->on('status');

            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empreendimentos');
    }
}
