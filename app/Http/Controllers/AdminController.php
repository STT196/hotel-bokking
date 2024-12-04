<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(){
        $hotels = Hotel::where('status', false)->with('cities.district', 'user')->get();
        $customers = User::where('user_type', 'customer')->count();
        $hotels_count = Hotel::where('status', true)->count();
        $reservation = Reservation::where('status', 1)->count();
        $revenue = Reservation::where('status', 1)->sum('amount');
        // dd($hotels);
        return view('admin.dashboard', compact('hotels', 'customers', 'reservation', 'revenue', 'hotels_count'));
    }
     public function aprrove(Hotel $booking){
        $booking->status = true;
        $booking->save();
        return redirect()->back()->with('success', 'Hotel Approved');
    }
    public function decline(Hotel $booking){
        $booking->status = false;
        $booking->save();
        return redirect()->back()->with('success', 'Hotel Rejected');
    }

    public function manage(){
        $hotels = Hotel::with('cities.district', 'user')->get();
        // dd($hotels);
        return view('admin.manage', compact('hotels'));
    }
}
