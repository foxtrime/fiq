<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    protected $table = "relatorios";

    protected $fillable = [
        'nome'
    ];

    public function unidade()
    {
        return $this->belongsTo('App\Models\Unidade');
    }
}
