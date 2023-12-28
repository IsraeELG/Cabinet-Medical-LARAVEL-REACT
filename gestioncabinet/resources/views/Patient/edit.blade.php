@extends('Patient.layout')
@section('content')
<div style="width: 800px;margin-left: 500px;border-radius:50px;margin-top: 30px;height:800px;border: solid;border-width:10px;border-color: #9c27b0;margin-bottom: 1000px;">
<p ><center style="font-family: fantasy;font-size:20px;color: #9c27b0;">EDITER PATIENT </center></p>
      <form action="{{ url('patient/' .$patient->id) }}" method="post" style="width: 800px; height: 1000px;margin-bottom: 1000px;">
        {!! csrf_field() !!}
        @method("PATCH")
        
        <input type="hidden" name="id" id="id" value="{{$patient->id}}" id="id" />
        <div class="mb-3" style="width: 700px;margin-left: 40px;">
            <label for="exampleFormControlInput1" class="form-label" style="color:#e3306f;">CIN</label>
            <input type="text" value="{{$patient->cin}}" name="cinPatient" class="form-control" id="cin" placeholder="CIN Patient...">
        </div>
        <div class="mb-3" style="width: 700px;margin-left: 40px;">
            <label for="exampleFormControlInput1" class="form-label" style="color:#e3306f;">Nom</label>
            <input type="text" value="{{$patient->nom}}" class="form-control" name="nom" id="nom" placeholder="Nom patient...">
        </div>
        <div class="mb-3" style="width: 700px;margin-left: 40px;">
            <label for="exampleFormControlInput1" class="form-label" style="color:#e3306f;">Prénom</label>
            <input type="text" value="{{$patient->prenom}}" class="form-control" name="prenom" id="prenom" placeholder="Prénom patient...">
        </div>
        <div class="mb-3" style="width: 700px;margin-left: 40px;">
            <label for="" class="form-label" style="color:#e3306f;">Gender</label></br>
            <input type="radio"  id="gender" name="gender" value="Femme" >
            <label for="">Femme</label><br>
            <input type="radio"  id="gender" name="gender" value="Homme" >
            <label for="">Homme</label><br>
        </div>
        <div class="mb-3" style="width: 700px;margin-left: 40px;">
            <label for="exampleFormControlInput1" class="form-label" style="color:#e3306f;">Adresse </label>
            <input type="text" value="{{$patient->Adresse}}" class="form-control" name="Adresse" id="Adresse" placeholder="Adresse de patient...">
        </div>
        <div class="mb-3" style="width: 700px;margin-left: 40px;">
            <label for="exampleFormControlInput1" class="form-label" style="color:#e3306f;">Téléphone </label>
            <input type="text" value="{{$patient->telephone}}" class="form-control" name="telephone" id="telephone" placeholder="Numéro de téléphone de patient...">
        </div>
        <div class="mb-3" style="width: 700px;margin-left: 40px;">
            <label for="" class="form-label" style="color:#e3306f;">Date de naissance  :  </label>
            <input type="date"value="{{$patient->datenaissance}}"  name="datenaissance" required pattern="\d{4}-\d{2}-\d{2}">
            <span class="validity"></span>
        </div>
        <div class="mb-3" style="width: 700px;margin-left: 40px;">
            <label for="exampleFormControlInput1" class="form-label" style="color:#e3306f;">Lieu de naissance </label>
            <input type="text" value="{{$patient->lieunaissance}}" class="form-control" name="lieunaissance" id="lieunaissance" placeholder="Lieu de naissance ...">
        </div>
        
          <input type="submit" value="Update" class="btn btn-success" style="margin-left: 662px;background-color: #9c27b0;"></br>
        
    </form>
   
  </div>
</div>
</div>
@stop