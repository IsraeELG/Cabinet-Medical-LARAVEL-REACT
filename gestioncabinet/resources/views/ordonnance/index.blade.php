@extends('ordonnance.layout')
@section('content')
<div style="display: flex;justify-content: center;margin-top: 75px;">
        <div>
            <form action="{{url('/ordonnance')}}" class="col-auto ms-auto" type="get">
                <div class="input-group">
                    <input type="text" name="search" type="search" 
                    placeholder=" Search" class="form-cntrol" style="height: 40PX;">
                    <button class="btn btn-secondary" type="submit" style="background-color: #0d6efd;">
                        Go. !
                    </button>
                </div>
            </form>
        </div>
        <div class="position-absolute top-4 end-3" style=" margin-top: 50px;">
               <a href="{{ url('/ordonnance/create')}}" class="btn btn-primary" style="margin-left: 1100px;background-color: #0d6efd;">
                    <i class="fas fa-circle-plus"></i>Ajouter une ordonnance
               </a>

               <a href="{{ url('/ordonnance')}}" class="btn btn-primary" style="background-color: #0d6efd;">
                     <i class="fas fa-circle-plus"></i>Liste des ordonnances
               </a>
        </div>
    </div>
</div>
</div>
        

<div class="card " style="width: 1382px;margin-left: 300px;margin-top: 53px;">
            <div class="card-header pb-0" style="background-color: #0d6efd;">
            <h6 style="color:white;"><i class="material-icons opacity-10">receipt_long</i>Ordonnance</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date ordonnance</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">M.Nom</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">M.Prenom</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Specialite</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">P.nom</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">P.prenom</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">P.age</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">P.poids</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">P.sexe</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Medicament</th>

                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($ordonnance as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $loop->iteration }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->dateordonnance }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->nomM }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->prenomM }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->specialite }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->nomP }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->prenomP }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->ageP }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->poidsP }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->sexeP }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->Medicaments }}
                        </div>
                      </td>
                      <td>
                        <a href="{{ url('/ordonnance/' . $item->id) }}" title="View ordonnance"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                        <a href="{{ url('/ordonnance/' . $item->id . '/edit') }}" title="Edit ordonnance"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('/ordonnance' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Supprimer Ordonnance" onclick="return confirm('&quot;Are you really sure want to delete ?&quot;')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                    
              
                  </tbody>
                </table>
              </div>
            </div>
    

@endsection