<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacoes'; // Definindo explicitamente o nome da tabela

    protected $fillable = [
        'idVendedor',  // Adicione todos os campos que podem ser preenchidos em massa
        'nota',
        'opiniao',
    ];

    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class, 'idVendedor');
    }

}

