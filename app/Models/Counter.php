<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Counter extends Model
{
    use HasFactory;
    
    protected $table = 'counters';

    protected $fillable = [
        'key',
        'prefix',
        'value',
    ];
}
