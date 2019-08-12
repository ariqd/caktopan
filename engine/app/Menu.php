<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = ['id'];

    public function scopePaket($query) 
    {
        return $query->where('category', '=', 'paket');
    }

    public function scopeSambal($query) 
    {
        return $query->where('category', '=', 'sambal');
    }

    public function scopeExpress($query) 
    {
        return $query->where('category', '=', 'express');
    }
}
