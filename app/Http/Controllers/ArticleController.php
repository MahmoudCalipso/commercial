<?php

namespace App\Http\Controllers;

use App\Articles;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::all();

        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('article.create');
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
            'Art_Ref'=>'required',
            'Art_CodeBarre'=>'required',
            'Art_Designation'=>'required',
            'Art_DateAchat'=>'required',
            'Art_Bloquer'=>'required|boolean',
            'Art_PrixUht'=>'required',
          //'Art_Remise'=>'required',
          //'Promo'=>'required',
            'Pays'=>'required',
          //'Art_ImageCodeABarre'=>'required',
            'Art_PrixUTtc'=>'required',
            'Art_Image' => 'required',
          //'Etat'=>'required',
            'QteMax'=>'required',
          //'QteMin'=>'required',
          //'QteReel'=>'required',
          //'QteTheorique'=>'required',
          //'DateEntree'=>'required',
          //'DateSortie'=>'required',
          //'Art_Marge'=>'required',
          //'Art_TauxMarge'=>'required',
            'Art_HT'=>'required',
            'Art_TTC'=>'required',
            'ArtRv_HT'=>'required',
            'ArtRv_TTC'=>'required',
            //'NbrPoint'=>'required'
        ]);
        if ($request->hasFile('Art_Image')) {
            $data = $request->input('Art_Image');
            $photo = $request->file('Art_Image')->getClientOriginalName();
            $destination = public_path() . '/images/';
            $request->file('Art_Image')->move($destination, $photo);
            $data['Art_Image'] = $photo;
        }

        $article = Articles::create([
            'Art_Ref' =>  $request->get('Art_Ref'),
            'Art_CodeBarre' =>  $request->get('Art_CodeBarre'),
            'Art_Designation' =>  $request->get('Art_Designation'),
            'Art_DateAchat' =>  $request->get('Art_DateAchat'),
            'Art_Bloquer'=> $request->get('Art_Bloquer'),
            'Art_PrixUht'=> $request->get('Art_PrixUht'),
            //'Art_Remise'=> $request->get('art_remise'),
            //'Promo'=> $request->get('art_promo'),
            'Pays'=> $request->get('Pays'),
            //'Art_ImageCodeABarre'=> $request->get('art_imageCodeBarre'),
            'Art_PrixUTtc'=> $request->get('Art_PrixUTtc'),
           'Art_Image'=> $data,
            //'Etat'=> $request->get('art_etat'),
            'QteMax'=> $request->get('QteMax'),
            //'QteMin'=> $request->get('art_qteMin'),
            //'QteReel'=> $request->get('art_QteReel'),
            //'QteTheorique'=> $request->get('art_qteTheorique'),
            //'DateEntree'=> $request->get('art_dateEntree'),
            //'DateSortie'=> $request->get('art_dateSortie'),
            //'Art_Marge'=> $request->get('art_marge'),
            //'Art_TauxMarge'=> $request->get('art_tauxMarge'),
            'Art_HT'=> $request->get('Art_HT'),
            'Art_TTC'=> $request->get('Art_TTC'),
            'ArtRv_HT'=> $request->get('ArtRv_HT'),
            'ArtRv_TTC'=> $request->get('ArtRv_TTC')
            //'NbrPoint'=> $request->get('art_nbrPoint')
        ]);


         $article->save();



        return redirect('articles')->with('success', 'Article saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Articles::find($id);
        return View('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Articles::find($id);

        return View('article.edit', compact('article'));
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
        $request->validate([
            'Art_Ref'=>'required',
            'Art_CodeBarre'=>'required',
            'Art_Designation'=>'required',
            'Art_DateAchat'=>'required',
            'Art_Bloquer'=>'required',
            'Art_PrixUht'=>'required',
            //  'Art_Remise'=>'required',
            //  'Promo'=>'required',
            'Pays'=>'required',
            //  'Art_ImageCodeABarre'=>'required',
             'Art_PrixUTtc'=>'required',
            'Art_Image'=>'required|image|mimes:jpeg,png,jpg|max:3048',
            'Etat'=>'required',
            'QteMax'=>'required',
            // 'QteMin'=>'required',
            // 'QteReel'=>'required',
            // 'QteTheorique'=>'required',
            'DateEntree'=>'required',
            //  'DateSortie'=>'required',
            // 'Art_Marge'=>'required',
            //'Art_TauxMarge'=>'required',
            'Art_HT'=>'required',
            'Art_TTC'=>'required',
            'ArtRv_HT'=>'required',
            'ArtRv_TTC'=>'required',
            //'NbrPoint'=>'required'
        ]);

        $article = Articles::find($id);

        $article->Art_Ref= $request->get('Art_Ref');
        $article->Art_CodeBarre =  $request->get('Art_CodeBarre');
        $article->Art_Designation =  $request->get('Art_Designation');
        $article->Art_DateAchat =  $request->get('Art_DateAchat');
        $article->Art_Bloquer = $request->get('Art_Bloquer');
        $article->Art_PrixUht = $request->get('Art_PrixUht');
      //  $article->Art_Remise = $request->get('art_remise');
      //  $article->Promo = $request->get('art_promo');
        $article->Pays= $request->get('Pays');
      //  $article->Art_ImageCodeABarre = $request->get('art_imageCodeBarre');
        $article->Art_PrixUTtc = $request->get('Art_PrixUTtc');
        $article->Art_Image = $request->get('Art_Image');
        //$article->Etat = $request->get('art_etat');
        $article->QteMax = $request->get('QteMax');
      // $article->QteMin = $request->get('art_qteMin');
      //  $article->QteReel = $request->get('art_QteReel');
      //  $article->QteTheorique = $request->get('art_qteTheorique');
        //$article->DateEntree = $request->get('art_dateEntree');
      //  $article->DateSortie = $request->get('art_dateSortie');
      //$article->Art_Marge = $request->get('art_marge');
      //  $article->Art_TauxMarge = $request->get('art_tauxMarge');
        $article->Art_HT = $request->get('art_HT');
        $article->Art_TTC = $request->get('Art_TTC');
        $article->ArtRv_HT = $request->get('ArtRv_HT');
        $article->ArtRv_TTC = $request->get('ArtRv_TTC');
        //$article->NbrPoint = $request->get('art_nbrPoint');

        $article->save();

        return redirect('articles')->with('success', 'Article updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Articles::find($id);
        $article->delete();

        return redirect('articles')->with('success', 'Article deleted!');
    }
}
