<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Articles extends Model
{
    use Notifiable;
    protected $primaryKey = "Art_Id";
    protected $fillable = [

        //'Art_Remise','Promo','Art_ImageCodeABarre','QteMin','QteReel',
        //'QteTheorique','Art_Marge','DateSortie','Art_TauxMarge','NbrPoint',
		 'Art_Ref','Art_CodeBarre','Art_Designation','Art_DateAchat','Art_Bloquer',
		 'Pays','Art_Image','Etat','QteMax','DateEntree',
		'Art_HT','Art_TTC','ArtRv_HT','ArtRv_TTC','Art_PrixUht','Art_PrixUTtc'
    ];

    public function users()
    {
    	return $this->belongsToMany('users');
    }

    public function tva()
    {
        return $this->hasOne('tva');
    }

    public function garanties()
    {
        return $this->hasOne('garanties');
    }

    public function famille_articles()
    {
        return $this->hasOne('famille_articles');
    }

    public function marques()
    {
        return $this->hasOne('marques');
    }

    public function magasins()
    {
        return $this->hasOne('magasins');
    }


}
