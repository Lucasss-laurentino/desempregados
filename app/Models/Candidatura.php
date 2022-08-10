<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidatura extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vaga_id'
    ];

    public function user() {
        return $this->belogsTo(User::class);
    }
    public function vaga() {
        return $this->belongsTo(Vaga::class);
    }
}
