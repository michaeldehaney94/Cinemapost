<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    //protected $guarded = [];
    protected $fillable = [
        'cinema_id',
        'movie_title',
        'movie_rating',
        'genre',
        'cast',
        'running_time',
        'release_date',
        'time_playing',
        'week_scheduled',
        'plot',
        'movie_poster',
        'movie_trailer'
    ];

    public function cinema()
    {
        return $this->belongsTo(Cinemas::class);
    }
}




