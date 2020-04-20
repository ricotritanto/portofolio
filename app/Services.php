<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Services extends Model
{
    protected $guarded = [];
    protected $table = 'services';
	public function parent()
    {
        return $this->belongsto(services::class);
    }
}
