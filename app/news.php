<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = 'tr_news';

    public function typenews()
    {
    	return $this->hasMany('\App\type_news','id','type_news_id')->where('status','A');
    }

    public function subtypenews()
    {
    	return $this->hasMany('\App\sub_type','id','type_sub_news_id')->where('status','A');
    }
}
