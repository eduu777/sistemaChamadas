<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticate
{
    use HasFactory;
    
    protected $fillable = [
        'login',
        'senha',
        'acesso',
    ];

}
