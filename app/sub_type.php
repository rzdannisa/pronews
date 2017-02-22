<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_type extends Model
{
    protected $table = 'ms_sub_type';

     public function newstype()
    {
    	return $this->hasMany('\App\type_news','id','type_news_id');
    }
}
