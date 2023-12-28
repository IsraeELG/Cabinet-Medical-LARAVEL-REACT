
@extends('RDV.layout')
@section('content')
 <div>
<div class="card"style="width: 800px;margin: auto;margin-top: 20px;height: 834px;border: solid;border-radius: 50px;border-color: #1cd1e0;border-width: 10px;margin-bottom: 1000px;">
  <P style="font-size: 20px;"><center><B>Modifier Rendez-vous</b></center><br></p>
   
  <div class="card-body">
      
      <form action="{{ url('rdv/' .$RDV->id) }}" method="post" style=" position:center;margin-top: 60px;">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <input type="hidden" name="id" id="id" value="{{$RDV->id}}" id="id" />
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">CIN</label>
            <input type="text" value="{{$RDV->cinPatient}}" name="cinPatient" class="form-control" id="cinPatient" placeholder="CIN Patient...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nom</label>
            <input type="text" value="{{$RDV->nomPatient}}" class="form-control" name="nomPatient" id="nom" placeholder="Nom patient...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prénom</label>
            <input type="text" value="{{$RDV->prenomPatient}}" class="form-control" name="prenomPatient" id="prenom" placeholder="Prénom patient...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Téléphone </label>
            <input type="text" value="{{$RDV->telephonePatient}}" class="form-control" name="telephonePatient" id="prenom" placeholder="Numéro de téléphone de patient...">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Veuillez choisir une date de rendez-vous :  </label>
            <input type="datetime-local" value="{{$RDV->date}}" name="date" required pattern="\d{4}-\d{2}-\d{2}">
            <span class="validity"></span>
            <input type="submit" value="Update" class="btn btn-success" style="margin-top: 174px;margin-left: 609px;background-color: #1cd1e0;">
        </div>

        
    </form>
   
  </div>
</div>
</div>
@stop

