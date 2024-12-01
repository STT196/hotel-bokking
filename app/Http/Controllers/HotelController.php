<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    /**
     * Store the profile data in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate the input fields
        if(Hotel::with('user')->where('user_id',Auth::id())->get() == null){
            $validatedData = $request->validate([
                'security' => 'nullable|boolean',
                'deluxe_telephone' => 'nullable|string|max:255',
                'public_computer' => 'nullable|boolean',
                'status' => 'nullable|boolean',
                'description' => 'nullable',
                'luxury_room_price' => 'nullable|numeric',
                'deluxe_room_name' => 'nullable|string|max:255',
                'twitter' => 'nullable|string|max:255|url',
                'comfort_telephone' => 'nullable|string|max:255',
                'meeting_facilities' => 'nullable|boolean',
                'comfort_ac_room' => 'nullable|boolean',
                'luxury_outside_windows' => 'nullable|boolean',
                'luxury_ac_room' => 'nullable|boolean',
                'crn_price' => 'nullable|numeric',
                'price_from' => 'nullable|numeric',
                'sunset_boat_trip' => 'nullable|boolean',
                'crn_photo' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
                'comfort_non_ac_room' => 'nullable|boolean',
                'deluxe_outside_windows' => 'nullable|boolean',
                'pinterest' => 'nullable|string|max:255|url',
                'gift_shop' => 'nullable|boolean',
                'deluxe_ac_room' => 'nullable|boolean',
                'crn' => 'nullable|string|max:255',
                'transport' => 'nullable|boolean',
                'email' => 'nullable|email|max:255',
                'linkedin' => 'nullable|string|max:255|url',
                'deluxe_room_price' => 'nullable|numeric',
                'internet_access' => 'nullable|boolean',
                'facebook' => 'nullable|string|max:255|url',
                'deluxe_tv_cable' => 'nullable|boolean',
                'room_service' => 'nullable|boolean',
                'luxury_room_image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
                'thumbnail' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
                'luxury_room_name' => 'nullable|string|max:255',
                'room_type' => 'nullable|string|max:255',
                'type' => 'nullable|numeric',
                'address' => 'nullable|string|max:500',
                'longitude' => 'nullable|numeric',
                'good_interior' => 'nullable|boolean',
                'comfort_tv_cable' => 'nullable|boolean',
                'deluxe_reception_facility' => 'nullable|boolean',
                'zip_code' => 'nullable|string|max:20',
                'latitude' => 'nullable|numeric',
                'luxury_telephone' => 'nullable|string|max:255',
                'luxury_tv_cable' => 'nullable|boolean',
                'deluxe_room_image' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
                'good_drinks' => 'nullable|boolean',
                'youtube_link' => 'nullable|string|max:255|url',
                'comfort_reception_facility' => 'nullable|boolean',
                'instagram' => 'nullable|string|max:255|url',
                'luxury_non_ac_room' => 'nullable|boolean',
                'luxury_reception_facility' => 'nullable|boolean',
                'deluxe_non_ac_room' => 'nullable|boolean',
                'swimming_pool' => 'nullable|boolean',
                'comfort_outside_windows' => 'nullable|boolean',
                'title' => 'nullable|string|max:255',
                'name' => 'nullable|string|max:255',
                'breakfast' => 'nullable|boolean',
            ]);

            // Save data to the database
            $profile = new Hotel($validatedData);

            $profile->user_id = Auth::user()->id;

            // dd($profile);

            if ($request->hasFile('crn_photo')) {
                $crnPhoto = $request->file('crn_photo');
                $crnPhotoName = uniqid() . '_' . $crnPhoto->getClientOriginalName();
                $profile->crn_photo = $crnPhoto->storeAs('photos', $crnPhotoName, 'public');
            }
            if ($request->hasFile('luxury_room_image')) {
                $luxuryRoomImage = $request->file('luxury_room_image');
                $luxuryRoomImageName = uniqid() . '_' . $luxuryRoomImage->getClientOriginalName();
                $profile->luxury_room_image = $luxuryRoomImage->storeAs('images', $luxuryRoomImageName, 'public');
            }
            if ($request->hasFile('deluxe_room_image')) {
                $deluxeRoomImage = $request->file('deluxe_room_image');
                $deluxeRoomImageName = uniqid() . '_' . $deluxeRoomImage->getClientOriginalName();
                $profile->deluxe_room_image = $deluxeRoomImage->storeAs('images', $deluxeRoomImageName, 'public');
            }
            if ($request->hasFile('thumbnail')) {
                $deluxeRoomImage = $request->file('thumbnail');
                $deluxeRoomImageName = uniqid() . '_' . $deluxeRoomImage->getClientOriginalName();
                $profile->deluxe_room_image = $deluxeRoomImage->storeAs('thumbnail', $deluxeRoomImageName, 'public');
            }

            // try {
                $profile->save();
            // } catch (\Exception $e) {
            //     return redirect()->back()->withErrors(['error' => 'Failed to save data: ' . $e->getMessage()]);
            // }
            return redirect()->back()->with('success', 'Data saved successfully.');
            // dd($profile);

            // return response()->json(['message' => 'Profile saved successfully!']);
        }

        else{
            return redirect()->back()->with('error', 'You have already created a profile.');
        }
    }
}
