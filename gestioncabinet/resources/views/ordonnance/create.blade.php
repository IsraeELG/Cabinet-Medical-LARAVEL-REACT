@extends('ordonnance.layout')
@section('content')
 
<div class="card" style="width: 700px;margin-left: 666px;margin-top: 40px;">
  <div class="card-header" style="background-color: #0d6efd;color:white;"><center>ordonnance</center></div>
  <div class="card-body">
      
      <form action="{{ url('ordonnance') }}" method="post">
        {!! csrf_field() !!}
        <label>dateordonnance</label></br>
        <input type="text" name="dateordonnance" id="dateordonnance" class="form-control"></br>
        <label>nomM</label></br>
        <input type="text" name="nomM" id="nomM" class="form-control"></br>
        <label>prenomM</label></br>
        <input type="text" name="prenomM" id="prenomM" class="form-control"></br>
        <label>specialite</label></br>
        <input type="text" name="specialite" id="specialite" class="form-control"></br>
        <label>nomP</label></br>
        <input type="text" name="nomP" id="nomP" class="form-control"></br>
        <label>prenomP</label></br>
        <input type="text" name="prenomP" id="prenomP" class="form-control"></br>
        <label>ageP</label></br>
        <input type="text" name="ageP" id="ageP" class="form-control"></br>
        <label>poidsP</label></br>
        <input type="text" name="poidsP" id="poidsP" class="form-control"></br>
        <label>sexeP</label></br>
        <input type="text" name="sexeP" id="sexeP" class="form-control"></br>
        <label>Medicaments : Dose </label></br>
        <input type="text" name="Medicaments" id="Medicaments" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop