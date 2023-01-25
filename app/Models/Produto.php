<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';

    protected $casts = [
        'estados' => 'array',
    ];

    protected $fillable = [
        'produto',
        'preco',
        'photo',
        'estados',
        'obs'
    ];
}