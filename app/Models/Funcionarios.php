<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class funcionarios extends Model
{
    protected $table = "funcionarios";

    protected $fillable = [
        'nome'
    ];

    public function funcionarios()
    {
        return $this->belongsTo('App\Models\Funcionarios');
    }
}
