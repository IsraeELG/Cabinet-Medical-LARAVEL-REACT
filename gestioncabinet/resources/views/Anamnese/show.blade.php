@extends('Anamnese.layout')
@section('content')
 
<div class="card" style="width: 800px;margin-left: 500px;margin-top:100px;">
    <div class="card-header" style="color:white;background-color: #2c2c30;"><center>Details Anamanese</center></div>
    <div class="card-body">
        <div class="card-body">
            <b style="color:#e91e63;">Id Patient:</b>
            <h5 class="card-title">  {{ $anamnese->idPatient }}</h5>
            <b>Date:</b>
            <h5 class="card-title">  {{ $anamnese->date }}</h5>
            <b>Motif de consultation  : </b>  
            <h5 class="card-title"> {{ $anamnese->motifconsultation }}</h5>
            <b>Maladies épidemiques : </b>    
            <h5 class="card-title">  {{ $anamnese->maladie_epidemique }}</h5>
            <b>Maladie héreditaire :</b>
            <h5 class="card-title">  {{ $anamnese->maladie_hereditaire }}</h5>
            <b>Médicament en cours:</b>
            <h5 class="card-text"> {{ $anamnese->medicamentcours }}</h5>
            <b>nom médicament :</b>
            <h5 class="card-text"> {{ $anamnese->nommedicament }}</h5>
            <b>Antécedent chirurgical :</b>
            <h5 class="card-title">  {{ $anamnese->antecedent_chirurgical }}</h5>
            <b>Habitude toxique :</b>
            <h5 class="card-title">  {{ $anamnese->habitude_toxique }}</h5>
            <b>Allergies :</b>
            <h5 class="card-title">  {{ $anamnese->allergies }}</h5>
            <b>Vaccination  :</b>
            <h5 class="card-title">  {{ $anamnese->vaccination }}</h5>
            <b>Poids : </b>
            <h5 class="card-title"> {{ $anamnese->poids }}</h5>
            <b>Taille :</b>
            <h5 class="card-title">  {{ $anamnese->taille }}</h5>
            <b>Température:</b>
            <h5 class="card-title">  {{ $anamnese->temperature }}</h5>
            <b>tension :</b>
            <h5 class="card-title">  {{ $anamnese->tension }}</h5>
            <b>Fréquence cardiaque :</b>
            <h5 class="card-title">  {{ $anamnese->frequence_cardiaque }}</h5>
            <b>Fréquence respiratoire :</b>
            <h5 class="card-title">  {{ $anamnese->frequence_respiratoire }}</h5>
            <b>Signes généraux  : </b>
            <h5 class="card-title"> {{ $anamnese->signe }}</h5>
        </div>
    </div>
</div>
