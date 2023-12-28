<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordonnance extends Model
{
    protected $table = 'ordonnance';
    protected $primaryKey = 'id';
    protected $fillable = ['dateordonnance', 'nomM', 'prenomM', 'specialite', 'nomP', 'prenomP', 'ageP', 'poidsP', 'sexeP', 'Medicaments' ];
}