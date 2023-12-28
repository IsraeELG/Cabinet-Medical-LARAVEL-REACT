<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
    use HasFactory;

    protected $table = 'anamneses';
    protected $primarykey = 'id';
    protected $fillable = [
   
    'idPatient',    
    'date' ,
    'motifconsultation',
    'maladie_epidemique',
    'maladie_hereditaire',
    'medicamentcours',
    'nommedicament',
    'antecedent_chirurgical',
    'habitude_toxique' ,
    'allergies' ,
    'vaccination',
    'poids' ,
    'taille' ,
    'temperature' , 
    'tension' ,
    'frequence_cardiaque' , 
    'frequence_respiratoire' ,
    'signe' ,
    
    ];
}

