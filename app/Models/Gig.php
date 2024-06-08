<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'location',
        'description',
        'instrument',
        'experience',
        'attire',
        'time',
        'date',
        'genre',
        'add_info',
        'poster_picture'

    ];
    public function promoters()
    {
        return $this->belongsTo(Promoter::class); 
    }
    public function artists()
    {
        return $this->belongsTo(Artist::class);
    }
}
