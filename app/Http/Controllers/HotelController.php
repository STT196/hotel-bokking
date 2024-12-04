<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Models\District;

class HotelController extends Controller
{
    /**
     * Store the profile data in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */

     public function hotelsDashboard(){
        $new_request = Reservation::with('hotel')
        ->whereHas('hotel', function($query) {
            $query->where('user_id', Auth::user()->id);
        })
        ->where('status',0)->get();
        // dd($new_request);
        return view('hotels.pending',compact('new_request'));
    }

     public function history(){
        $new_request = Reservation::with('hotel')->whereHas('hotel', function($query) {
            $query->where('user_id', Auth::user()->id);
        })->where('status', '>=', 1)->get();
        // dd($new_request);
        return view('hotels.history',compact('new_request'));
    }

     public function view(){
        $districts = District::with('city')->get();
        // dd($districts);
        return view('hotels.profile',compact('districts'));
     }


    public function store(Request $request)
    {
        // Validate the input fields
        // if (Hotel::where('user_id', Auth::id())->exists()) {
        //     return redirect()->back()->with('error', 'You have already created a profile.');
        // }

        $validatedData = $request->validate([
            'security' => 'nullable|boolean',
            'deluxe_telephone' => 'nullable|string|max:255',
            'public_computer' => 'nullable|boolean',
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
            'telephone' => 'required|numeric|min:10',
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
            'district' => 'nullable|numeric',
            'city' => 'nullable|numeric',

        ]);

        // Save data to the database
        $profile = new Hotel($validatedData);
        $profile->user_id = Auth::user()->id;
        if ($request->hasFile('crn_photo')) {
            $crnPhoto = $request->file('crn_photo');
            $crnPhotoName = time() . '.' . $crnPhoto->getClientOriginalExtension();
            $destinationPath = public_path('/crn');
            $crnPhoto->move($destinationPath, $crnPhotoName);
            $profile->crn_photo = 'crn/' . $crnPhotoName;
        }
        if ($request->hasFile('luxury_room_image')) {
            $luxuryRoomImage = $request->file('luxury_room_image');
            $luxuryRoomImageName = time() . '.' . $luxuryRoomImage->getClientOriginalExtension();
            $destinationPath = public_path('/luxury_room_image');
            $luxuryRoomImage->move($destinationPath, $luxuryRoomImageName);
            $profile->luxury_room_image = 'luxury_room_image/' . $luxuryRoomImageName;
        }
        if ($request->hasFile('deluxe_room_image')) {
            $deluxeRoomImage = $request->file('deluxe_room_image');
            $deluxeRoomImageName = time() . '.' . $deluxeRoomImage->getClientOriginalExtension();
            $destinationPath = public_path('/deluxe_room_image');
            $deluxeRoomImage->move($destinationPath, $deluxeRoomImageName);
            $profile->deluxe_room_image = 'deluxe_room_image/' . $deluxeRoomImageName;
        }
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
            $destinationPath = public_path('/thumbnail');
            $thumbnail->move($destinationPath, $thumbnailName);
            $profile->thumbnail = 'thumbnail/' . $thumbnailName;
        }

        $profile->save();
        return redirect()->back()->with('success', 'Data saved successfully.');
    }

    public function aprrove($booking){
        // dd($booking);
        $hotel = Reservation::find($booking);
        $hotel->status = 1;
        $hotel->save();
        return redirect()->back()->with('success', 'Data saved successfully.');
    }

    public function decline($booking){
        $hotel = Reservation::find($booking);
        $hotel->status = 2;
        $hotel->save();
        return redirect()->back()->with('success', 'Data saved successfully.');
    }
}
