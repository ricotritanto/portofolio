<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Experience extends Model
{
    protected $guarded = [];
    protected $table = 'experiences';
	public function parent()
    {
        return $this->belongsto(experience::class);
    }
}
