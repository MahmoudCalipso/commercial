<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Famille_articles extends Model
{
    use Notifiable;
    protected $primaryKey = 'FamArt_Id';

    protected $fillable = [
        'FamArt_Type',
    ];
    public function article(){
    	return $this->hasMany('articles');
    }
}
