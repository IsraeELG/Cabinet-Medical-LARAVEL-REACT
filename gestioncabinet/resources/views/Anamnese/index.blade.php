@extends('Anamnese.layout')
@section('content')

<div class="card mb-5" style="width: 1641px;margin-left: 29px;margin-top: 49px;">
    <div class="card-body" style="border-radius: 46px;background-image: url('../images/in.jpg');background-repeat:no-repeat;">
        <div class="row">
            <div class="col-auto">
               <a href="{{ url('/anamnese/create')}}" class="btn btn-primary">

               <i class="fas fa-circle-plus"></i> Ajouter un Anamnèse
               </a>
            </div>

            <div class="col-auto">
               <a href="{{ url('/anamnese')}}" class="btn btn-primary">
               <i class="fas "></i>Liste des Anamnèses
               </a>
            </div>
            <form action="{{url('/anamnese')}}" class="col-auto ms-auto" type="get">
                <div class="input-group">
                    <input type="text" name="search" type="search" 
                    placeholder=" Search" class="form-cntrol" style="height: 40PX;">
                    <button class="btn btn-secondary" type="submit" style="background-color: #e91e63;">
                        Go. !
                    </button>
                </div>
            </form>
        </div>

        <div class="card " style="margin-top: 38px;">
            <div class="card-header pb-0" style="background-color: #2c2c30;">
            <h6 style="color:white;"><i class="material-icons opacity-10">table_view</i>Anamnese</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Id Patient</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Motif consultation</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Maladie épidemique</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Maladie héreditaire</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Médicament en cours</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nom médicament </th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Antécedent chirurgical</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Habitude toxique</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Allergies </th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Vaccination</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Poids </th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Taille</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Température</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tension</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fréquence cardiaque </th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fréquence respiratoire</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fréquence respiratoire</th>

                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($anamnese as $item)
                    <tr >
                      <td style="color:black;">
                        <div class="d-flex px-2 py-1">
                          
                          {{ $loop->iteration }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->idPatient }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->date}}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->motifconsultation }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->maladie_epidemique }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->maladie_hereditaire}}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->medicamentcours }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->nommedicament }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->antecedent_chirurgical }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->habitude_toxique }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->allergies }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->vaccination }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->poids }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->taille }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->temperature }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->tension }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->frequence_cardiaque }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->frequence_respiratoire }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->signe }}
                        </div>
                      </td>
                      <td>
                        <a href="{{ url('/anamnese/' . $item->id) }}" title="View anamnese"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>

                        <form method="POST" action="{{ url('/anamnese' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Supprimer anamnese" onclick="return confirm('&quot;Are you really sure want to delete ?&quot;')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                    
              
                  </tbody>
                </table>
              </div>
            </div>
@endsection