<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Hotel;

class HotelSeedr extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     for($i=1; $i<=30; $i++){

    //         DB::table('hotels')->insert([
    //             [
    //                 'user_id' => 1,
    //                 'security' => true,
    //                 'deluxe_telephone' => '123-456-7890',
    //                 'public_computer' => true,
    //                 'status' => true,
    //                 'luxury_room_price' => mt_rand(150, 300),
    //                 'deluxe_room_name' => 'Deluxe Room',
    //                 'twitter' => 'https://twitter.com/hotel1',
    //                 'comfort_telephone' => '123-456-7890',
    //                 'meeting_facilities' => true,
    //                 'comfort_ac_room' => true,
    //                 'luxury_outside_windows' => true,
    //                 'luxury_ac_room' => true,
    //                 'crn_price' => 100.00,
    //                 'price_from' =>  mt_rand(150, 300),
    //                 'sunset_boat_trip' => true,
    //                 'crn_photo' => 'R.jpeg',
    //                 'thumbnail' => 'R.jpeg',
    //                 'comfort_non_ac_room' => true,
    //                 'deluxe_outside_windows' => true,
    //                 'pinterest' => 'https://pinterest.com/hotel1',
    //                 'gift_shop' => true,
    //                 'deluxe_ac_room' => true,
    //                 'crn' => 'CRN123',
    //                 'transport' => true,
    //                 'email' => 'hotel1@example.com',
    //                 'linkedin' => 'https://linkedin.com/hotel1',
    //                 'deluxe_room_price' => 150.00,
    //                 'internet_access' => true,
    //                 'facebook' => 'https://facebook.com/hotel1',
    //                 'deluxe_tv_cable' => true,
    //                 'room_service' => true,
    //                 'luxury_room_image' => 'R.jpeg',
    //                 'luxury_room_name' => 'Luxury Room',
    //                 'room_type' => 'Luxury',
    //                 'address' => '123 Hotel St, City, Country',
    //                 'longitude' => 11.876379,
    //                 'good_interior' => true,
    //                 'comfort_tv_cable' => true,
    //                 'deluxe_reception_facility' => true,
    //                 'zip_code' => '85378',
    //                 'district' => random_int(1, 20),
    //                 'city' => random_int(1, 100),
    //                 'latitude' => 33.630386,
    //                 'luxury_telephone' => '123-456-7890',
    //                 'luxury_tv_cable' => true,
    //                 'deluxe_room_image' => 'R.jpeg',
    //                 'good_drinks' => true,
    //                 'youtube_link' => 'https://youtube.com/hotel1',
    //                 'comfort_reception_facility' => true,
    //                 'instagram' => 'https://instagram.com/hotel1',
    //                 'luxury_non_ac_room' => true,
    //                 'luxury_reception_facility' => true,
    //                 'deluxe_non_ac_room' => true,
    //                 'swimming_pool' => true,
    //                 'comfort_outside_windows' => true,
    //                 'title' => 'Hotel 1',
    //                 'name' => 'Hotel 1',
    //                 'type' => 1,
    //                 'telephone' => '1234567890',
    //                 'breakfast' => true,
    //                 'description' => 'This is a description of Hotel 1.',
    //                 'created_at' => now(),
    //                 'updated_at' => now(),
    //             ],
    //             // Add more hotel entries as needed
    //         ]);
    //     }
    // }
    public function run(): void
    {
        Hotel::factory()->count(30)->create();
    }
}
