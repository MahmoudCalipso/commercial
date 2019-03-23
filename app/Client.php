<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Clt_civilite','Clt_first_name','Clt_last_name','Clt_email',
        'Clt_adresse','Clt_tel','Clt_type','Clt_Remise','CumuleFidelite',
        'Clt_ExoTimbre','Clt_Solde','Clt_Encours','Clt_codePost','Clt_pays'
    ];
}
