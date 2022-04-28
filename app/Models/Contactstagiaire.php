<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactstagiaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
