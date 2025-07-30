<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clas extends Model
{
    protected $table = 'clases';

    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(user::class, 'clas_id');
    }
}
