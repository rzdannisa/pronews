<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ms_contact extends Model
{
    protected $table = 'ms_contact';

    public function fitur()
    {
    	return $this->hasMany('\App\lt_contact_fitur','id','id_type');
    }
}
