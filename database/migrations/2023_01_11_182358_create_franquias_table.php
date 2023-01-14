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
    Schema::create('franquias', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->uuid('cidade_id')->index();
      $table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade');
      $table->string('nome_franquia');
      $table->string('email')->unique();
      $table->string('fone', 20)->nullable();
      $table->string('celular', 20)->nullable();
      $table->string('cep', 20)->unique();
      $table->string('logradouro')->nullable();
      $table->string('numero')->nullable();
      $table->string('uf', 2)->nullable();
      $table->string('cidade')->nullable();
      $table->string('complemento')->nullable();
      $table->string('bairro')->nullable();
      $table->string('latitude')->nullable();
      $table->string('longitude')->nullable();
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
    Schema::dropIfExists('franquias');
  }
};
