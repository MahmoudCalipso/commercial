<?php

namespace App\Http\Controllers;

use App\doc_entetes;
use Illuminate\Http\Request;

class DocEnteteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docEnt = doc_entetes::all();

        return view('document.index', compact('docEnt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return View('document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
            'Four_name'=>'required',
            'DocEnt_Observation'=>'required',
            'DocEnt_Ref'=>'required',
            'DocEnt_Etat'=>'required',
            'DocEnt_DateCrea'=>'required',
            'DocEnt_TTauxRemi'=>'required',
            'DocEnt_TotalHT'=>'required',
            'DocEnt_MtRemise'=>'required',
            'DocEnt_TotalHTNet'=>'required',
            'DocEnt_TVA'=>'required',
            'DocEnt_MtTVA'=>'required',
            'DocEnt_TotalTTC'=>'required',
            'DocEnt_TotalTTCNet'=>'required',
            'DocEnt_Type'=>'required',
            'Doc_Ent_Trace'=>'required',
            'DocEnt_TtLettre'=>'required',
            'Avoir_trace'=>'required',
            'acc'=>'required'

        ]);

        $fournisseur = new Fournisseur([
            'Four_firstName' =>  $request->get('four_firstName'),
            'Four_lastName' =>  $request->get('four_lastName'),
            'Four_mail' => $request->get('four_mail'),
            'Four_pays' => $request->get('four_pays'),
            'Four_adr' => $request->get('four_adr'),
            'Four_tel' => $request->get('four_adr'),
            'TypeFrs_Intitule' => $request->get('four_type')

        ]);
        $fournisseur->save();
        return redirect('fournisseur.index')->with('success', 'Fournisseur saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\doc_entetes  $doc_entetes
     * @return \Illuminate\Http\Response
     */
    public function show(doc_entetes $doc_entetes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\doc_entetes  $doc_entetes
     * @return \Illuminate\Http\Response
     */
    public function edit(doc_entetes $doc_entetes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\doc_entetes  $doc_entetes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, doc_entetes $doc_entetes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\doc_entetes  $doc_entetes
     * @return \Illuminate\Http\Response
     */
    public function destroy(doc_entetes $doc_entetes)
    {
        //
    }
}
