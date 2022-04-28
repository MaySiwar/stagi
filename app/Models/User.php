<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'prénom',
        'phone',
        'secteur',
        'email',
        'password',
    ];
    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function stages(){
        return $this->belongsToMany(Stage::class);
    }
    public function contactstagiares(){
        return $this->belongsToMany(Contactstagiaire::class);
    }
    public function employers(){
        return $this->belongsToMany(Employer::class);
    }
    public function actualites(){
        return $this->belongsToMany(Actualite::class);
    }
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
    ];
}
