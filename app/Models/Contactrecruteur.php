<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactstagiaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_stagiaire',
        'email_stagiaire',
        'subject',
        'messages',
        
    ];

    public function employers(){
        return $this->belongsToMany(Employer::class);
    }
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
