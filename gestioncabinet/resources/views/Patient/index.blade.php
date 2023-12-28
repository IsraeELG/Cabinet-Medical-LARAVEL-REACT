@extends('Patient.layout')
@section('content')

 
    <div style="display: flex;justify-content: center;">
        <div>
            <form action="{{url('/patient')}}" class="col-auto ms-auto" type="get">
                <div class="input-group" style=" margin-top: 79px;" >
                    <input type="text" name="search" type="search"  placeholder=" Search" class="form-cntrol" style=" height:40px;" >
                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>
                  Go. !
                  </button>
                </div>
            </form>
        </div>


        <div class="position-absolute top-4 end-3" style="margin-top:48px;">
               <a href="{{ url('/patient/create')}}" class="btn btn-primary">
                    <i class="fas fa-circle-plus"></i>Ajouter un patient 
               </a>

               <a href="{{ url('/patient')}}" class="btn btn-primary">
                     <i class="fas fa-circle-plus"></i>Liste des patients
               </a>
        </div>
    </div>
</div>
          <div class="card" style=" width: 1000; width: 1367px; margin-top: -690px; margin-left: 298px;">
            <div class="card-header pb-0" style="background-color: #e91e63;">
            <h6 style="color:white;"><i class="material-icons opacity-10">person</i>   Patients</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cin</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prenom</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sexe</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Adresse</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telephone</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date naissance</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lieu naissance</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($patient as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $loop->iteration }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->cin }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->nom }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->prenom }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->gender }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->Adresse }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->telephone }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->datenaissance }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $item->lieunaissance }}
                        </div>
                      </td>
                      <td>
                        <a href="{{ url('/patient/' . $item->id) }}" title="View Patient"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                        <a href="{{ url('/patient/' . $item->id . '/edit') }}" title="Edit patient"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('/patient' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Supprimer Patient" onclick="return confirm('&quot;Are you really sure want to delete ?&quot;')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                    
              
                  </tbody>
                </table>
              </div>
            
          
        
      </div>
</div>
        


    

@endsection