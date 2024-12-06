<?php

namespace App\Models;
use App\Models\City;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    public function city(){
        return $this->hasMany(city::class);
    }
}
