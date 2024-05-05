<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupeModule extends Model
{
    use HasFactory;
    protected $fillable = ['groupe_id','module_id'];
}
