<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'desciption',
        'date',

    ];
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function employers(){
        return $this->belongsToMany(Employer::class);
    }

}
