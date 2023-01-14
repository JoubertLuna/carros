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
    Schema::create('viagems', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->uuid('veiculo_id')->index();
      $table->foreign('veiculo_id')->references('id')->on('veiculos')->onDelete('cascade');
      $table->uuid('franquia_origem_id')->index();
      $table->foreign('franquia_origem_id')->references('id')->on('franquias')->onDelete('cascade');
      $table->uuid('franquia_destino_id')->index();
      $table->foreign('franquia_destino_id')->references('id')->on('franquias')->onDelete('cascade');
      $table->date('data');
      $table->time('tempo_duracao')->nullable();
      $table->time('horario_saida');
      $table->time('horario_chegada')->nullable();
      $table->double('old_preco', 10, 2)->nullable();
      $table->double('preco', 10, 2);
      $table->integer('total_parcela');
      $table->boolean('e_promicao')->default(false);
      $table->string('imagem')->nullable();
      $table->text('descricao')->nullable();
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
    Schema::dropIfExists('viagems');
  }
};
