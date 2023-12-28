@extends('RDV.layout')
@section('content')
<div class="card" style="width: 700px;margin-left: 600px;margin-top: 90px;">
  
  <div class="card-body">
      
    <form action="{{ url('rdv') }}" method="post">
        {!! csrf_field() !!}
        <div class="card-header" style="background-color: #1cd1e0;">
        <h1 style=" color:#e32f6e;">Ajouter un Rendez-vous  </h1>
        </div>
        <br>
        <br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">CIN</label>
            <input type="text" class="form-control" name="cinPatient" id="cin" required placeholder="CIN Patient...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nomPatient" id="nom" required placeholder="Nom patient...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenomPatient" id="prenom" required placeholder="Prénom patient...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Téléphone </label>
            <input type="text" class="form-control" name="telephonePatient" id="telephone" required placeholder="Numéro téléphone de patient...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Veuillez choisir une date de rendez-vous :  </label>
            <input type="datetime-local" name="date" required pattern="\d{4}-\d{2}-\d{2}">
            <span class="validity"></span>
        </div>
            <input type="submit" value="Save" class="btn btn-success" style="background-color: #1cd1e0;"></br>
    </form>
   </div>
</div>
@stop