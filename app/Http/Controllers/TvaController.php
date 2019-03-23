<?php

namespace App\Http\Controllers;

use App\Tva;
use Illuminate\Http\Request;

class TvaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tva_list = Tva::all();
        return view('tva.index', compact('tva_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tva.create');
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
            'TVA_Des' => 'required'
        ]);
        $tva = new Tva([
            'TVA_Des' =>  $request->get('TVA_Des')
        ]);
        $tva->save();
        return redirect('tva')->with('success', 'TVA saved!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tva  $tva
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tva = Tva::find($id);
        return View('tva.edit', compact('tva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'TVA_Des' => 'required'
        ]);
        $tva = Tva::find($id);
        $tva->TVA_Des = $request->get('TVA_Des');
        $tva->save();
        return redirect('tva')->with('success', 'TVA updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tva = Tva::find($id);
        $tva->delete();

        return redirect('tva')->with('success', 'TVA deleted!');

    }
}
