@extends('ordonnance.layout')
@section('content')
 
<div class="card" style="width: 765px;margin: auto;border:solid;margin-bottom: 1000px;border-color: #0d6efd;border-width: 10px;">
  <div class="card-header" style="color: #0d6efd;font-size: 30px;"><center>Modifier Ordonnance</center></div>
  <div class="card-body">
      
      <form action="{{ url('ordonnance/' .$ordonnance->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$ordonnance->id}}" id="id" />
        <label>dateordonnance</label></br>
        <input type="text" name="dateordonnance" id="dateordonnance" value="{{$ordonnance->dateordonnance}}" class="form-control"></br>
        <label>nomM</label></br>
        <input type="text" name="nomM" id="nomM" value="{{$ordonnance->nomM}}" class="form-control"></br>
        <label>prenomM</label></br>
        <input type="text" name="prenomM" id="prenomM" value="{{$ordonnance->prenomM}}" class="form-control"></br>
        <label>specialite</label></br>
        <input type="text" name="specialite" id="specialite" value="{{$ordonnance->specialite}}" class="form-control"></br>
        <label>nomP</label></br>
        <input type="text" name="nomP" id="nomP" value="{{$ordonnance->nomP}}" class="form-control"></br>
        <label>prenomP</label></br>
        <input type="text" name="prenomP" id="prenomP" value="{{$ordonnance->prenomP}}" class="form-control"></br>
        <label>ageP</label></br>
        <input type="text" name="ageP" id="ageP" value="{{$ordonnance->ageP}}" class="form-control"></br>
        <label>poidsP</label></br>
        <input type="text" name="poidsP" id="poidsP" value="{{$ordonnance->poidsP}}" class="form-control"></br>
        <label>sexeP</label></br>
        <input type="text" name="sexeP" id="sexeP" value="{{$ordonnance->sexeP}}" class="form-control"></br>
        <label>Medicaments</label></br>
        <input type="text" name="Medicaments" id="Medicaments" value="{{$ordonnance->Medicaments}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success" style=" background-color:#0d6efd;"></br>
    </form>
   
  </div>
</div>
 
@stop