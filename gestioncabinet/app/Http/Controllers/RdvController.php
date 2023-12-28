<?php

namespace App\Http\Controllers;

use App\Models\Rdv;
use Illuminate\Http\Request;

class RdvController extends Controller
{
    public function index()
    {
        $RDV = Rdv::all();
        return view ('RDV.index')->with('RDV', $RDV);
        
       
    }
    
    public function create()
    {
        return view('RDV.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Rdv::create($input);
        return redirect('rdv')->with('flash_message', 'Rendez-vous Addedd!');  
    }
    
    public function show($id)
    {
        $RDV = Rdv::find($id);
        return view('RDV.show')->with('RDV', $RDV);
    }
    
    public function edit($id)
    {
        $RDV = Rdv::find($id);
        return view('RDV.edit')->with('RDV',$RDV);
    }
  
    public function update(Request $request, $id)
    {
        $RDV = Rdv::find($id);
        $input = $request->all();
        $RDV->update($input);
        return redirect('rdv')->with('flash_message', 'Rendez-vous Updated!');  
    }
  
    public function destroy($id)
    {
        Rdv::destroy($id);
        return redirect('rdv')->with('flash_message', 'Rendez-vous deleted!');  
    }
}
