<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Tva extends Model
{

    use Notifiable;
    protected $primaryKey = "TVA_Id";
    protected $fillable = [
	    'TVA_Des'
    ];
     
    public function article()
    {
        return $this->hasMany('article');
    }
}
