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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social');
            $table->integer('ruc');
            $table->string('descripcion');
            $table->double('presupuesto', 8, 2);
            $table->enum('estado', ['ATENDIDO', 'PENDIENTE', 'DENEGADO']);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_22')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('solicitudes');
    }
};
