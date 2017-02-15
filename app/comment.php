<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = 'ms_comment';

    public function idnews()
    {
    	return $this->hasMany('\App\news','id','id_news');
    }
}
