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
    Schema::create('testemunhos', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->string('nome_autor');
      $table->string('profissao_autor');
      $table->string('imagem')->nullable();
      $table->string('descricao');
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
    Schema::dropIfExists('testemunhos');
  }
};
