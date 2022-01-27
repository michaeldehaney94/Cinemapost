<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinemas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cinema_name',
        'location',
        'city'
        
    ];

    public function movie()
    {
        return $this->hasMany(Movies::class);
    }
}
