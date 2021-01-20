<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('problema_sistema');
            $table->string('Necessidade_operarsistema');
            $table->string('problemas_telefone');
            $table->string('problema_bioslab');
            $table->string('problema_equipamentopc');
            $table->string('problemas_internet');
            $table->string('sgenda_medica');
            $table->string('tem_dayoffm');
            $table->string('atrasos_abmet');
            $table->string('visitas_domiciliar');
            $table->string('coleta_sangue');
            $table->string('vacinas');
            $table->string('quantidade_equipe');
            $table->string('uniformizados');
            $table->string('medico_responsavel');
            $table->string('cadastro_conferidos');
            $table->string('reparo_iluminacao');
            $table->string('abastecimento_agua');
            $table->string('refrigeracao_ar');
            $table->string('reparo_energia');
            $table->string('reparo_esturtura');
            $table->string('pintura_desgastada');
            $table->string('probelmas_mobiliario');
            $table->string('fmaterial_insumo');
            $table->string('fmaterial_limpeza');
            $table->string('fmaterial_escritorio');
            $table->string('falta_dentista');
            $table->string('tem_dayoffu');
            $table->string('atrasos_odontologia');
            $table->string('visita_domiciliardentista');
            $table->string('todos_uniformizadosodonto');
            $table->string('problemas_equiodonto');
            $table->string('falta_mateinsuodonto');
            $table->string('cadasdastro_foramconfeodonto');
            $table->string('falta_remedioestoque');
            $table->string('todos_uniformizadofarma');
            $table->string('reclamacao_atendimento)');
            $table->string('limpeza_farma');
            $table->string('cadastro_foramconfefarma');
            $table->timestamps();
            $table->boolean('enviado') ->default(false); 
            $table->string('data');

             // fk
             $table->integer('unidade_id')->nullable()->unsigned();
        });

        Schema::table('relatorios', function($table){
            $table->foreign('unidade_id')->nullable()->references('id')->on('unidades')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relatorios');
    }
}
