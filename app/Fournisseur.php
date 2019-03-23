<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Fournisseur extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Four_civiliter', 'Four_firstName', 'Four_lastName', 'Four_mail', 'Four_Pays',
        'Four_adr', 'Four_codePost', 'Four_ville', 'Four_tel', 'Four_fax', 'TypeFrs_Intitule'
    ];

    public function article()
    {
        return $this->hasMany('Articles');
    }
}
