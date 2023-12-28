@extends('ordonnance.layout')
@section('content')
 
 
<div class="card" style="width: 800px;margin-left: 550px;margin-top: 100px;">
  <div class="card-header" style="background-color: #0d6efd;"><h5><center style="color:white;">Ordonnance</center></h5></div>
  <div class="card-body">
   
 
        <div class="card-body">
        <b>dateordonnance :</b>
         <p class="card-title"> {{ $ordonnance->dateordonnance }}</p>
         <b>nomM :</b>
        <p class="card-text"> {{ $ordonnance->nomM }}</p>
        prenomM :
        <p class="card-text"> {{ $ordonnance->prenomM }}</p>
        specialite :
        <p class="card-text"> {{ $ordonnance->specialite }}</p>
        nomP :
        <p class="card-text"> {{ $ordonnance->nomP }}</p>
        prenomP :
        <p class="card-text"> {{ $ordonnance->prenomP }}</p>
        ageP :
        <p class="card-text"> {{ $ordonnance->ageP }}</p>
        poidsP :
        <p class="card-text"> {{ $ordonnance->poidsP }}</p>
        sexeP : 
        <p class="card-text">{{ $ordonnance->sexeP }}</p>
        Medicaments :
        <p class="card-text"> {{ $ordonnance->Medicaments }}</p>
  </div>
       
    </hr>
  <a href="{{ url('/pdf/'.$ordonnance->id) }}" class="btn btn-warning">
    <i class="fas fa-file-pdf"></i>
    telecharger <b>PDF</b>
  </a>
  </div>
</div>