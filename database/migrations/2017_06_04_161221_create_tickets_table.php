<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tickets', function (Blueprint $table) {
      $table->increments('id');
      $table->string('type');
      $table->string('field1'); // roteiro
      $table->string('field2'); // malha
      $table->string('field3'); // frequencia
      $table->string('field4'); // unidade
      $table->string('field5'); // barras
      $table->string('field6'); // endereco
      $table->string('field7');
      $table->string('field8');
      $table->string('field9');
      $table->string('code');
      $table->string('monitored');
      $table->string('logo');
      $table->string('barcode');
      $table->string('qrcode');
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
    Schema::dropIfExists('tickets');
  }
}
