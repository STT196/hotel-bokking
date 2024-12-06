<?php

namespace App\Models;
use App\Models\District;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function district(){
        return $this->belongsTo(district::class);
    }
    }
