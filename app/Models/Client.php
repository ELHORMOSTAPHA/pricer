<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client';

    protected $fillable = [
        'nom',
        'societe',
        'ville',
        'type',
        'surface',
        'etiquettes',
        'tel',
        'email',
        'message',
    ];
}
