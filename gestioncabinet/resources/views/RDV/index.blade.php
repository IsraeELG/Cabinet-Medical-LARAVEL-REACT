@extends('RDV.layout')
@section('content')
    <div class="container" style="margin-left:-325px;>
        <div class="row">
 
            <div class="col-md-9" style="width: 1397px;margin-top:90px;margin-left: 592px;">
                <div class="card">
                    <div class="card-header" style="background-color: #1cd1e0;">
                        <h2>Rendez-Vous</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/rdv/create') }}" class="btn btn-success btn-sm" title="Ajouter un rendez-vous">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter Rendez-vous
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>CIN Patient</th>
                                        <th>Nom Patient </th>
                                        <th>Prénom Patient</th>
                                        <th>Téléphone</th>
                                        <th>Date de rendez-vous </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($RDV as $item)
                                    <tr>
                                    <td>
                        <div class="d-flex px-2 py-1">
                          
                          {{ $loop->iteration }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                        {{ $item->cinPatient }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                        {{ $item->nomPatient }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                        {{ $item->prenomPatient }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                        {{ $item->telephonePatient }}
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                        {{ $item->date}}
                        </div>
                      </td>
                      
                                        <td>
                                            <a href="{{ url('/rdv/' . $item->id) }}" title="View Rendez-vous"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/rdv/' . $item->id . '/edit') }}" title="Edit rdv"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/rdv' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer Rendez-vous" onclick="return confirm('&quot;Are you really sure want to delete ?&quot;')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection