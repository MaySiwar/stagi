<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_emp',
        'prenom_emp',
        'secteur_emp',
        'description',
    ];
    public function employers(){
        return $this->belongsTo('App\Models\Employer');
    }
}
