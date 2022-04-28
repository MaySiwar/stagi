<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'salaire',
        'ville',
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function employers(){
        return $this->belongsToMany(Employer::class);
    }

}
