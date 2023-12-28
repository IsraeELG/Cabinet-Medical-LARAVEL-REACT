@extends('Patient.layout')
@section('content')
 
<div class="card" style="border-radius:50px;width:500px;margin-left:700px;margin-top:120px;">
    <div class="card-header"  style="background-color: #9c27b0;"><center style="color:white;font-size:20px;">Details Patient</center></div>
    <div class="card-body" >
        <div class="card-body" >
            <h5 class="card-title" style="color:#e3306f;"> CIN : </h5>{{ $patient->cin }}
            <h5 class="card-title" style="color:#e3306f;"> Nom : </h5>{{ $patient->nom }}
            <h5 class="card-title" style="color:#e3306f;"> Prénom :</h5>{{ $patient->prenom }}
            <h5 class="card-title" style="color:#e3306f;"> Gender : </h5>{{ $patient->gender }}
            <h5 class="card-title" style="color:#e3306f;"> Adresse : </h5>{{ $patient->Adresse }}
            <h5 class="card-text" style="color:#e3306f;"> Téléphone :</h5>{{ $patient->telephone }}
            <h5 class="card-text" style="color:#e3306f;"> La date de naissance :</h5>{{ $patient->datenaissance }}
            <h5 class="card-title" style="color:#e3306f;"> Lieu de naissance : </h5>{{ $patient->lieunaissance }}

        </div>
    </div>
</div>