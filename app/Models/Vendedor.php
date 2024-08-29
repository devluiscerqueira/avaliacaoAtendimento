<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedores'; // Definindo explicitamente o nome da tabela

     // Relacionamento com a model Avaliacao
     public function avaliacoes()
     {
         return $this->hasMany(Avaliacao::class, 'idVendedor');
     }
}
