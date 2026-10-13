<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelogsTo; 

class Idea extends Model
{
    public function categoria (): BelogsTo
    {
        return $this->belongsTo(Categoria::class);
    }               
}
