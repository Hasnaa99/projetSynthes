<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
class Formateur extends Model implements Authenticatable
{   use AuthenticatableTrait;
    use HasFactory;

    protected $fillable = ["codeF", "nom", "prenom", "cin", "email", "password", "date_embauche"];

    //Formateur encadre plusiairs groupe
    public function groupes(){
        return $this->belongsToMany(Groupe::class);
    }
}
