<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $table = 'tr_news';

    public function typenews()
    {
    	return $this->hasMany('\App\type_news','id','type_news_id');
    }

    public function subtypenews()
    {
    	return $this->hasMany('\App\sub_type','id','type_sub_news_id');
    }

    public function typenews_r()
    {
    	return $this->hasMany('\App\type_news','id','type_news_id');
    }

    public function subtypenews_r()
    {
    	return $this->hasMany('\App\sub_type','id','type_sub_news_id');
    }

    public function author()
    {
        return $this->hasMany('\App\ms_user','id','modify_user_id');
    }
}
