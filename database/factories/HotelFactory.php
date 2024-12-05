<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'security' => $this->faker->boolean,
            'deluxe_telephone' => $this->faker->boolean,
            'public_computer' => $this->faker->boolean,
            'status' => $this->faker->boolean,
            'luxury_room_price' => $this->faker->randomFloat(2, 150, 300),
            'deluxe_room_name' => 'Deluxe Room',
            'twitter' => $this->faker->url,
            'comfort_telephone' => $this->faker->boolean,
            'meeting_facilities' => $this->faker->boolean,
            'comfort_ac_room' => $this->faker->boolean,
            'luxury_outside_windows' => $this->faker->boolean,
            'luxury_ac_room' => $this->faker->boolean,
            'crn_price' => $this->faker->randomFloat(2, 100, 200),
            'price_from' => $this->faker->randomFloat(2, 150, 300),
            'sunset_boat_trip' => $this->faker->boolean,
            'crn_photo' => 'R.jpeg',
            'thumbnail' => 'R.jpeg',
            'comfort_non_ac_room' => $this->faker->boolean,
            'deluxe_outside_windows' => $this->faker->boolean,
            'pinterest' => $this->faker->url,
            'gift_shop' => $this->faker->boolean,
            'deluxe_ac_room' => $this->faker->boolean,
            'crn' => 'CRN123',
            'transport' => $this->faker->boolean,
            'email' => $this->faker->email,
            'linkedin' => $this->faker->url,
            'deluxe_room_price' => $this->faker->randomFloat(2, 150, 300),
            'internet_access' => $this->faker->boolean,
            'facebook' => $this->faker->url,
            'deluxe_tv_cable' => $this->faker->boolean,
            'room_service' => $this->faker->boolean,
            'luxury_room_image' => 'R.jpeg',
            'luxury_room_name' => 'Luxury Room',
            'room_type' => 'Luxury',
            'address' => $this->faker->address,
            'longitude' => 33.630386,
            'good_interior' => $this->faker->boolean,
            'comfort_tv_cable' => $this->faker->boolean,
            'deluxe_reception_facility' => $this->faker->boolean,
            'zip_code' => $this->faker->postcode,
            'district' => $this->faker->numberBetween(1, 20),
            'city' => $this->faker->numberBetween(1, 100),
            'latitude' => 33.630386,
            'luxury_telephone' => $this->faker->boolean,
            'luxury_tv_cable' => $this->faker->boolean,
            'deluxe_room_image' => 'R.jpeg',
            'good_drinks' => $this->faker->boolean,
            'youtube_link' => $this->faker->url,
            'comfort_reception_facility' => $this->faker->boolean,
            'instagram' => $this->faker->url,
            'luxury_non_ac_room' => $this->faker->boolean,
            'luxury_reception_facility' => $this->faker->boolean,
            'deluxe_non_ac_room' => $this->faker->boolean,
            'swimming_pool' => $this->faker->boolean,
            'comfort_outside_windows' => $this->faker->boolean,
            'title' => $this->faker->company,
            'name' => $this->faker->company,
            'type' => $this->faker->numberBetween(1, 3),
            'telephone' => 1234567890,
            'breakfast' => $this->faker->boolean,
            'description' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
