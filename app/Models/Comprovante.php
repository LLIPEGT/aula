<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprovante extends Model
{
    use HasFactory;

    public function aluno() {
        return $this->belongsTo('\App\Models\Aluno');
    }

    public function categoria() {
        return $this->belongsTo('\App\Models\Categoria');
    }

    public function user() {
        return $this->belongsTo('\App\Models\User');
    }

    public function declaracao() {
        return $this->hasMany('\App\Models\Declaracao');
    }
}
