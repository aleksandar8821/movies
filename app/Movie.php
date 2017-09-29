<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    const STORE_RULES = [
        'title' => 'required | max: 50',
        'storyline' => 'required | min: 50'
    ];
}
