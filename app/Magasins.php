<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Magasins extends Model
{
    use Notifiable;
    protected $primaryKey ="Mag_Id";
    protected $fillable = [
        'nameMagasine','position'	
    ];

    public function article(){
    	return $this->hasMany('articles');
    }

}
