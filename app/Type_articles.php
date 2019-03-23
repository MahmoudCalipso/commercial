<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Type_articles extends Model
{
    use Notifiable;
    protected $primaryKey = "idTypeArt";
    protected $fillable = [
        'libelleTypeArt'
    ];
    public function articles(){
        return $this->hasMany('articles');
    }
}
