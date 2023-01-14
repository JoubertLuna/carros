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
    Schema::create('veiculos', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->uuid('marca_id')->index();
      $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
      $table->string('nome_veiculo');
      $table->integer('qty_passageiros');
      $table->integer('qty_lugares');
      $table->integer('qty_portas');
      $table->string('class', 8)->default('gasolina');
      $table->string('descricao')->nullable();
      $table->string('imagem')->nullable();
      $table->string('ativo', 1)->default('S');
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
    Schema::dropIfExists('veiculos');
  }
};
