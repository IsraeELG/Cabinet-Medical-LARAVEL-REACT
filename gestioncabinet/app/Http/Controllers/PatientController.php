<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $patient;
    public function index()
    {
        $search = request()->query('search');
        if($search)
        {
            $patient= DB::table('patients')->where('nom','LIKE','%'.$search.'%')->get();
            // $patient = Patient::where(' nom'. ' lIKE'. ' %'.$search.'%')->simplePaginate(5);
        }else{
            $patient = Patient::simplePaginate();
        }
        // $patient=Patient::all();
        return view ('Patient.index')->with('patient', $patient);
    }


    public function create()
    {
       return view('Patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input = $request->all();
        Patient::create($input);
        return redirect('patient')->with('flash_message', 'Patient Addedd!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        return view('Patient.show')->with('patient', $patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('Patient.edit')->with('patient',$patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient =Patient::find($id);
        $input = $request->all();
        $patient->update($input);
        return redirect('patient')->with('flash_message', 'Patient Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Patient::destroy($id);
       return redirect('patient')->with('flash_message', 'Patient deleted!');  
    }

}