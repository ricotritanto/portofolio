<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;	

class About extends Model
{
    protected $guarded = [];
    protected $table = 'abouts';
	public function parent()
    {
        return $this->belongsto(About::class);
    }
}
