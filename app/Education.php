<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Education extends Model
{
    protected $guarded = [];
    protected $table = 'education';
	public function parent()
    {
        return $this->belongsto(education::class);
    }
}
