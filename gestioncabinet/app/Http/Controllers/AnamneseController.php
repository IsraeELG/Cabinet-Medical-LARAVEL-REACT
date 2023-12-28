<?php

namespace App\Http\Controllers;

use App\Models\Anamnese;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnamneseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $anamnese;
    public function index()
    {
        $search = request()->query('search');
        if($search)
        {
            $anamnese= DB::table('anamneses')->where('idPatient','LIKE','%'.$search.'%')->get();
        }else{
            $anamnese = Anamnese::all();
        }
        // $anamnese=anamnese::all();
        #return view ('Anamnese.index')->with('anamnese', $anamnese);
        return response()->json([
            'status' => 200,
            'orders' => $anamnese
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anamnese.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // Anamnese::create($input);
        Anamnese::create([
            'idPatient' => $request->idPatient,
            'date' => $request->date,
            'motifconsultation' => $request->motifconsultation,
            'maladie_epidemique' => implode(',', $request->maladie_epidemique),
            'maladie_hereditaire' => $request->maladie_hereditaire,
            'medicamentcours' => $request->medicamentcours,
            'nommedicament' => $request->nommedicament,
            'antecedent_chirurgical' => $request->antecedent_chirurgical,
            'habitude_toxique' => implode(',', $request->habitude_toxique),
            'allergies' => $request->allergies,
            'vaccination' => $request->vaccination,
            'poids' => $request->poids,
            'taille ' => $request->taille ,
            'temperature ' => $request->temperature ,
            'tension' => $request->tension,
            'frequence_cardiaque' => $request->frequence_cardiaque,
            'frequence_respiratoire' => $request->frequence_respiratoire,
            'signe ' => implode(',', $request->signe) ,
       
        ]);
        return redirect('anamnese')->with('flash_message', 'Anamnese Addedd !');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anamnese = Anamnese::find($id);
        return view('Anamnese.show')->with('anamnese', $anamnese);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anamnese::destroy($id);
        return redirect('anamnese')->with('flash_message', 'anamnese deleted!'); 
    }
}
