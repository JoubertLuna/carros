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
    Schema::create('reservas', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->uuid('user_id')->index();
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->uuid('viagem_id')->index();
      $table->foreign('viagem_id')->references('id')->on('viagems')->onDelete('cascade');
      $table->date('data_reserva');
      $table->enum('status', ['reservado', 'cancelado', 'pago', 'concluido']);
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
    Schema::dropIfExists('reservas');
  }
};
