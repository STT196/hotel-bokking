<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;
use App\Models\User;

class Reservation extends Model
{
    //
    protected $fillable = [
        'hotel_id',
        'name',
        'email',
        'tpnumber',
        'start_date',
        'end_date',
        'adult_count',
        'child_count',
        'room_type',
        'created_at',
        'updated_at'
        ];

    public function hotel(){
        return $this->belongsTo(Hotel::class,'hotel_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
