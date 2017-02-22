<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ms_user extends Model
{
    protected $table = 'ms_user';

    public function typeuser()
    {
    	return $this->hasMany('\App\user_type','id','user_type_id');
    }
}
