<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tb_estrategia_wms_horario_prioridade', function (Blueprint $table) {
            $table->id('cd_estrategia_wms_horario_prioridade'); // Serial primary key
            $table->unsignedBigInteger('cd_estrategia_wms');
            $table->string('ds_horario_inicio'); // Assuming hh:mm format will be validated at the application level
            $table->string('ds_horario_final');  // Assuming hh:mm format will be validated at the application level
            $table->integer('nr_prioridade');
            $table->timestamp('dt_registro')->useCurrent();
            $table->timestamp('dt_modificado')->useCurrent()->useCurrentOnUpdate();
            // Add foreign key constraint
            $table->foreign('cd_estrategia_wms')->references('cd_estrategia_wms')->on('tb_estrategia_wms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_estrategia_wms_horario_prioridade', function (Blueprint $table) {
            //
        });
    }
};
