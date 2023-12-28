<?php

namespace App\Http\Controllers;
use App\Models\ordonnance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $search = request()->query('search');
        if($search)
        {
            $ordonnance= DB::table('ordonnance')->where('nomP','LIKE','%'.$search.'%')->get();
            // $patient = Patient::where(' nom'. ' lIKE'. ' %'.$search.'%')->simplePaginate(5);
        }else{
            //$ordonnance = ordonnance::simplePaginate();
            $ordonnance = ordonnance::all();
        }
       // return view ('ordonnance.index')->with('ordonnance', $ordonnance);
        return response()->json([
            'status' => 200,
            'orders' => $ordonnance
        ], 200);
    }

    
    public function create()
    {
        return view('ordonnance.create');
    }

    
    public function store(Request $request)
    {
        $input = $request->all();
        $ordonnance = Ordonnance::create($input);

        
        #ordonnance::create($input);
        #return redirect('ordonnance')->with('flash_message', 'ordonnance Addedd!');
        return response()->json([
            'status' => 200,
            'message' => 'Ordonnance added successfully!',
            'ordonnance' => $ordonnance,
        ], 200);
    }

    
    public function show($id)
    {
        // $ordonnance = ordonnance::find($id);
        // return view('ordonnance.show')->with('ordonnance', $ordonnance);

    $ordonnance = ordonnance::find($id);

    if (!$ordonnance) {
        return response()->json([
            'status' => 404,
            'message' => 'Ordonnance not found',
        ], 404);
    }

    return response()->json([
        'status' => 200,
        'ordonnance' => $ordonnance,
    ], 200);

    }

    
    public function edit($id)
    {
        // $ordonnance = ordonnance::find($id);
        // return view('ordonnance.edit')->with('ordonnance', $ordonnance);
        $ordonnance = Ordonnance::find($id);

        if (!$ordonnance) {
            return response()->json([
                'status' => 404,
                'message' => 'Ordonnance not found',
            ], 404);
        }
    
        return response()->json([
            'status' => 200,
            'ordonnance' => $ordonnance,
        ], 200);
    }

    
    public function update(Request $request, $id)
    {
        $ordonnance = Ordonnance::find($id);

    if (!$ordonnance) {
        return response()->json([
            'status' => 404,
            'message' => 'Ordonnance not found',
        ], 404);
    }

    $input = $request->all();
    $ordonnance->update($input);

    return response()->json([
        'status' => 200,
        'message' => 'Ordonnance updated successfully!',
        'ordonnance' => $ordonnance,
    ], 200);

        // $ordonnance = ordonnance::find($id);
        // $input = $request->all();
        // $ordonnance->update($input);
        // return redirect('ordonnance')->with('flash_message', 'ordonnance Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ordonnance::destroy($id);
        // return redirect('ordonnance')->with('flash_message', 'ordonnance deleted!'); 
        $ordonnance = Ordonnance::find($id);

    if (!$ordonnance) {
        return response()->json([
            'status' => 404,
            'message' => 'Ordonnance not found',
        ], 404);
    }

    $ordonnance->delete();

    return response()->json([
        'status' => 200,
        'message' => 'Ordonnance deleted successfully!',
    ], 200);
    }
    


}
 