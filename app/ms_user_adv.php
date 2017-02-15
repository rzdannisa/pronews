<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ms_user_adv extends Model
{
    protected $table = 'ms_user_adv';

    public function adve()
    {
    	return $this->hasMany('\App\lt_adv','id','lt_id_adv')->where('status','A');
    }

}
