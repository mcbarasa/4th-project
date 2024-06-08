<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'pho_no',
        'role',
        'address',
        'category',
        'profile_picture',
        'genre'

    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function gigs()
    {
        return $this->hasMany(Gig::class);
    }

    // collaboration relationships
    public function sentCollaborationRequests()
    {
        return $this->hasMany(CollaborationRequest::class, 'sender_id');
    }

    public function receivedCollaborationRequests()
    {
        return $this->hasMany(CollaborationRequest::class, 'receiver_id');
    }
}
