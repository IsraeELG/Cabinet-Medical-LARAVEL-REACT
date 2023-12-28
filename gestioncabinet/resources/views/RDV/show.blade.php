@extends('RDV.layout')
@section('content')
 
<div class="card" style="width: 500px;margin-left: 700px;margin-top: 200px;height: 500px;">
    <div class="card-header" style="color:black;font-family: fantasy;font-size:20px;background-color: #1cd1e0;"><center>Rendez-vous</center></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title" style="color:#e32f6e"> CIN : </h5>{{ $RDV->cinPatient }}
            <h5 class="card-title"style="color:#e32f6e"> Nom : </h5>{{ $RDV->nomPatient }}
            <h5 class="card-title"style="color:#e32f6e"> Prénom :</h5>{{ $RDV->prenomPatient }}
            <h5 class="card-text"style="color:#e32f6e"> Téléphone :</h5>{{ $RDV->telephonePatient }}
            <h5 class="card-text"style="color:#e32f6e"> La date de rendez-vous :</h5>{{ $RDV->date }}
        </div>
    </div>
</div>