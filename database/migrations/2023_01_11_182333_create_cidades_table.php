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
    Schema::create('cidades', function (Blueprint $table) {
      $table->uuid('id')->primary();
      $table->uuid('estado_id')->index();
      $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
      $table->string('nome_cidade');
      $table->integer('zip_code')->nullable()->unique();
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
    Schema::dropIfExists('cidades');
  }
};
