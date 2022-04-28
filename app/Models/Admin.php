<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'email_admin',
        'password_admin',
    ];

public function actualites(){
    return $this->hasMany(Actualite::class);
}
public function users(){
    return $this->hasMany(User::class);
}
public function employers(){
    return $this->hasMany(Employer::class);
}
}
