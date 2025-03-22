<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;

    // Specifica i campi che possono essere assegnati in massa
    protected $fillable = [
        'id',
        'name',
        'description',
        'url',
        'category',
        'language',
        'country'
    ];

    // Impostare la tabella se il nome non segue la convenzione di Laravel
    protected $table = 'sources';

    // Definire eventuali date che devono essere gestite come datetime
    protected $dates = ['created_at', 'updated_at'];
}
