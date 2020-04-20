<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Skills extends Model
{
    protected $guarded = [];
    protected $table = 'skills';
	public function parent()
    {
        return $this->belongsto(skills::class);
    }
}
