<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'security',
        'deluxe_telephone',
        'public_computer',
        'luxury_room_price',
        'deluxe_room_name',
        'twitter',
        'comfort_telephone',
        'meeting_facilities',
        'comfort_ac_room',
        'luxury_outside_windows',
        'luxury_ac_room',
        'crn_price',
        'sunset_boat_trip',
        'crn_photo',
        'comfort_non_ac_room',
        'deluxe_outside_windows',
        'pinterest',
        'gift_shop',
        'deluxe_ac_room',
        'crn',
        'transport',
        'email',
        'linkedin',
        'deluxe_room_price',
        'internet_access',
        'facebook',
        'deluxe_tv_cable',
        'room_service',
        'luxury_room_image',
        'luxury_room_name',
        'room_type',
        'address',
        'longitude',
        'good_interior',
        'comfort_tv_cable',
        'deluxe_reception_facility',
        'zip_code',
        'latitude',
        'luxury_telephone',
        'luxury_tv_cable',
        'deluxe_room_image',
        'good_drinks',
        'youtube_link',
        'comfort_reception_facility',
        'instagram',
        'luxury_non_ac_room',
        'luxury_reception_facility',
        'deluxe_non_ac_room',
        'swimming_pool',
        'comfort_outside_windows',
        'title',
        'name',
        'breakfast',
        'thumbnail',
        'description',
        'type',
        'status',
        'price_from',
        'district',
        'telephone',
        'city',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cities(){
        return $this->belongsTo(City::class, 'city', 'id');
    }
    public function districts(){
        return $this->belongsTo(City::class, 'district', 'id');
    }

    public function reservations(){
        return $this->hasMany(Reservation::class,'id','hotel_id');
    }
}

