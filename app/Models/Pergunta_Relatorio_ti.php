<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pergunta_Relatorio_ti extends Model
{
    protected $table = "pergunta_relatorio_ti";

    protected $fillable = [
        'n_chamado',
        'obs',
        'chamado_aberto',
        'data_chamado_fechado',
    ];

    public function relatorios_perguntas()
    {
        return $this->belongsToMany('App\Models\Relatorio','pergunta_relatorio_ti', 'relatorio_id','pergunta_id')->withPivot('n_chamado','obs','chamado_aberto','data_chamado_fechado');
    }

}
