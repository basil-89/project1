<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'ratings';

    protected $fillable = [
        'review_q',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
    ];

}
