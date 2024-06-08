<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promoter extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'pho_no',
        'organization',
        'address'

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function gigs()
    {
        return $this->hasMany(Gig::class);
    }
}
