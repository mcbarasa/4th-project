<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    // relationships
    
    public function Promoters()
    {
        return $this->hasOne(Promoter::class);
    }
    public function artists()
    {
        return $this->hasOne(Artist::class);
    }
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    public function profile()
{
    return $this->hasOne(Profile::class);
}
public function ratings()
{
    return $this->hasMany(Rating::class);
}
public function commments()
{
    return $this->hasMany(Comment::class);
}
}
