<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    protected $fillable = [ 
        'team1',
        'team2',
        'score1',
        'score2',
        'result'
    ];
}
