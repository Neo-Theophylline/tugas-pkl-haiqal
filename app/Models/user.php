<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $guarded = [];

    public function class()
    {
        return $this->belongsTo(clas::class, 'clas_id');
    }
}
