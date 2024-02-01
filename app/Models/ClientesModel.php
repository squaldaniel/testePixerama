<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientesModel extends Model
{
    use HasFactory;
    public $table = 'clientes';
    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'nascimento',
        'rua',
        'num_compl',
        'cep',
        'cidade',
        'estado',
        'sexo',
        'ativo'
    ];
    public $timestamps = false;
}
