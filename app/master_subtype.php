<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class master_subtype extends Model
{
    protected $table = 'lt_type_news';

    public function subtypeee()
    {
    	return $this->hasMany('\App\sub_type','type_news_id','id')->where('status','A');
    }
}