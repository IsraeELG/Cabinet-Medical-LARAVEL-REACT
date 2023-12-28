<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    use HasFactory;

    protected $table = 'rdv';
    protected $primarykey = 'id';
    protected $fillable = ['cinPatient' , 'nomPatient' , 'prenomPatient' , 'telephonePatient' , 'date' ];
}
