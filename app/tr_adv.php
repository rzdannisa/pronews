<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tr_adv extends Model
{
    protected $table = 'tr_adv';

    public function typeadv()
    {
    	return $this->hasMany('\App\lt_adv','id','lt_id_adv');
    }

    public function userid()
    {
    	return $this->hasMany('\App\ms_user_adv','id','ms_id_user_adv');
    }
}
