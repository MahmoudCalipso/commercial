<?php

namespace App\Http\Controllers;

use App\Famille_articles;
use Illuminate\Http\Request;

class FamilleArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $famArts = Famille_articles::all();

        return view('fm_art.index', compact('famArts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('fm_art.create');
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
            'FamArt_Type'=>'required'
            ]);
        $fmArt = new Famille_articles([
            'FamArt_Type' =>  $request->get('FamArt_Type')
           ]);
        $fmArt->save();
        return redirect('fm_articles')->with('success', 'Famille_Article saved!');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param $FamArt_Id
     * @return \Illuminate\Http\Response
     */
    public function edit($FamArt_Id)
    {
        $fm_Article = Famille_articles::find($FamArt_Id);

        return View('fm_art.edit', compact('fm_Article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $FamArt_Id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $FamArt_Id)
    {
        $request-> validate([
            'FamArt_Type'=>'required'
        ]);
         $famArt = Famille_articles::find($FamArt_Id);
         $famArt->FamArt_Type= $request->get('FamArt_Type');
         $famArt->save();
        return redirect('fm_articles')->with('success', 'Famille_Article updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $FamArt_Id
     * @return \Illuminate\Http\Response
     */
    public function destroy($FamArt_Id)
    {
        $famArt = Famille_articles::find($FamArt_Id);
        $famArt->delete();
        return redirect('fm_articles')->with('success', 'Famille_Article deleted!');
    }
}
