<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = ['id'];

    public function scopeOfSlug($query, $type) 
    {
        return $query->where('slug', '=', $type);
    }
}
