<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'feelings_text',
        'challenge_faced',
        'selected_emotion',
        'best_part',
        'learned_today'
    ];
}
