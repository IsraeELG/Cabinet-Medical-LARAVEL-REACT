<?php

namespace App\Http\Controllers;
use App\Models\ordonnance;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function pdf($id){
        // Find the ordonnance by ID
        $ordonnance = Ordonnance::find($id);
    
        // Check if the ordonnance exists
        if (!$ordonnance) {
            return response()->json([
                'status' => 404,
                'message' => 'Ordonnance not found',
            ], 404);
        }
    
        // Data to be passed to the PDF view
        $data = [
            'title' => 'Ordonnance',
            'ordonnance' => $ordonnance,
        ];
    
        // Load the PDF view with data
        $pdf = PDF::loadView('ordonnance.pdf', $data);
    
        // Define the PDF file name
        $pdfFileName = 'ordonnance_' . $ordonnance->id . '.pdf';
    
        // Return the PDF as a response with appropriate headers
        return response()->make($pdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $pdfFileName . '"',
        ]);
    }
}

    //     $ordonnance = ordonnance::find($id);
            
    //     $data =[
    //         'title' => 'Ordonnance',
    //         'ordonnance' => $ordonnance
    //     ];

    //     $pdf = PDF::loadView('ordonnance.pdf',$data);

    //    // return view('ordonnance.pdf')->with('ordonnance', $ordonnance);
           
    //     return $pdf->download('ordonnance.pdf');

