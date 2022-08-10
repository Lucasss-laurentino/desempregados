<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    protected $fillable = [

        'titulo',
        'email',
        'cargo',
        'tipo_de_vaga',
        'forma_de_trabalho',
        'estado',
        'cidade',
        'descricao',
        'requisitos',
        'salario',
        'beneficios',
    
    ];

    public function beneficios() {
        return $this->hasMany(Beneficio::class);
    }
    public function candidaturas() {
        return $this->hasMany(Candidaturas::class);
    }
}
