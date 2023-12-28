@extends('Anamnese.layout')
@section('content')
<form action="{{url('anamnese')}}" method="post" class="card">
{!! csrf_field() !!}
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col" style="margin-left: 10px;width: 820px;">
          <div class="border border-info" style="margin-top: 30px;height: 1149px;margin-left: 10px;">
            <div class="card-body">
            <div class="p-3 mb-2  text-dark" style="background-color:#6cbfcd;">INFORMATIONS PATIENT</div><br>
              <div class="input-group input-group-sm mb-3">
                <span class="btn btn-outline-info" id="inputGroup-sizing-sm">Id Patient</span>
                <input type="text" name ="idPatient" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="input-group input-group-sm mb-3">
                <span class="btn btn-outline-info" id="inputGroup-sizing-sm">Date Consultation</span>
                <input type="date" name="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="input-group input-group-sm mb-3">
                <span class="btn btn-outline-info" id="inputGroup-sizing-sm">Motif Consultation</span>
                <input type="text" name="motifconsultation" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="p-3 mb-2  text-dark" style="background-color:#6cbfcd;">Antecedants Pathologiques</div>
              <h6 class="card-title">Maladies epidemiques</h6>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="maladie_epidemique[]" value="Diabète" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Diabete
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="maladie_epidemique[]" value="HTA" id="flexCheckChecked" >
                <label class="form-check-label" for="flexCheckChecked">
                  HTA(hyper tension artielle)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="maladie_epidemique[]" value="FRCV" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  FRCV(facteurs de risque cqrdio-vasculaire)
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="maladie_epidemique[]" value="Tuberculose" id="flexCheckChecked" >
                <label class="form-check-label" for="flexCheckChecked">
                  Tuberculose
                </label>
              </div>
              <h6 class="card-title">Maladies heriditaires</h6>
              <div class="input-group input-group-sm mb-3">
                <span class="btn btn-outline-info" id="inputGroup-sizing-sm">Maladie</span>
                <input type="text" name="maladie_hereditaire" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <h6 class="card-title">Antecedants Medicaux</h6>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="medicamentcours" id="inlineRadio1" value="OUI">
                <label class="form-check-label" for="inlineRadio1">OUI</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="medicamentcours" id="inlineRadio2" value="NON">
                <label class="form-check-label" for="inlineRadio2">NON</label>
              </div>
              <div class="input-group input-group-sm mb-3">
                <span class="btn btn-outline-info" id="inputGroup-sizing-sm">Nom Medicament </span>
                <input type="text" class="form-control" name="nommedicament" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <h6 class="card-title">Antecedants Chirurgicaux</h6>
              <div class="input-group input-group-sm mb-3">
                <span class="btn btn-outline-info" id="inputGroup-sizing-sm">Nom Operation</span>
                <input type="text" name="antecedent_chirurgical" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="col-12">
                <button class="btn btn-primary  type="submit" style="margin-left: 590px;margin-top: 116px;">Envoyer</button>
              </div>
              <br>
              
            </div>
          </div>
          
        </div>
        <div class="col" style="margin-left: 10px;">
          <div class="border border-danger" style="margin-top: 30px;">
            
            <div class="card-body">
            <div class="p-3 mb-2  text-white" style="background-color:#f53c56;">Habitudes Toxiques</div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="habitude_toxique[] " value="Tabac" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Tabac
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="habitude_toxique[] " value="Alcool" id="flexCheckChecked" >
                <label class="form-check-label" for="flexCheckChecked">
                  Alcool
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="habitude_toxique[] " value="Drogue" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Drogue
                </label>
              </div>
              <h6 class="card-title">Allergies</h6>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="allergies" id="inlineRadio1" value="oui">
                <label class="form-check-label" for="inlineRadio1">OUI</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="allergies" id="inlineRadio2" value="non">
                <label class="form-check-label" for="inlineRadio2">NON</label>
              </div>
              <div class="input-group input-group-sm mb-3">
                <span class="btn btn-outline-danger" id="inputGroup-sizing-sm">Vaccination</span>
                <input type="text" name="vaccination" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="p-3 mb-2  text-white" style="background-color:#f53c56;">Constantes</div>
              <div class="input-group input-group-sm mb-3">
                <span class="btn btn-outline-danger" id="inputGroup-sizing-sm">Poids</span>
                <input type="text" name="poids" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="input-group input-group-sm mb-3">
                <span class="btn btn-outline-danger" id="inputGroup-sizing-sm">Taille</span>
                <input type="text" name="taille" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="input-group input-group-sm mb-3">
                <span class="btn btn-outline-danger" id="inputGroup-sizing-sm">Temperature</span>
                <input type="text" name="temperature" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="input-group input-group-sm mb-3">
                <span class="btn btn-outline-danger" id="inputGroup-sizing-sm">Tension</span>
                <input type="text" name="tension" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="input-group input-group-sm mb-3">
                <span class="btn btn-outline-danger" id="inputGroup-sizing-sm">Frequence cardiaque</span>
                <input type="text" name="frequence_cardiaque" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
              <div class="input-group input-group-sm mb-3">
                <span class="btn btn-outline-danger" id="inputGroup-sizing-sm">Frequence respiratoire</span>
                <input type="text" name=" frequence_respiratoire" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
              </div>
             
              <h6 class="card-title">Les signes generaux </h6>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="signe[]" value="Astherie">
                <label class="form-check-label" for="flexCheckDefault">
                  Astherie : perte energie
                </label>
            
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="signe[]" value="Anorexie"  >
                <label class="form-check-label" for="flexCheckChecked">
                  Anorexie : perte appetit
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="signe[]" value="Amaigrissement" >
                <label class="form-check-label" for="flexCheckDefault">
                  Amaigrissement
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="signe[]" value="Fièvre" >
                <label class="form-check-label" for="flexCheckDefault">
                  Fievre
                </label>
              </div>
              <br>
            </div>
          </div>
        </div>
        
      </div>
</form>
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
@endsection

