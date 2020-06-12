<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Messages extends Model
{
    protected $guarded = [];
    protected $table = 'messages';
	public function parent()
    {
        return $this->belongsto(messages::class);
    }
}
