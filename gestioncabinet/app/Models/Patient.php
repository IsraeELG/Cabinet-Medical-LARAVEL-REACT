<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'cin' ,
        'nom' ,
        'prenom' ,
        'gender',
        'age' , 
        'Adresse' ,
        'telephone' ,
        'datenaissance' ,
        'lieunaissance' ,
        'statutmarital'];
        
}
