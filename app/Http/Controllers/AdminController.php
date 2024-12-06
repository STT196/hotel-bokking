<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Reservation;
use App\Models\User;

class AdminController extends Controller
 //for status 1 is pending 2 is approved 3 is declined
{
    public function dashboard(){
        $hotels = Hotel::where('type','=', 1)->with('cities.district', 'user')->get();
        $customers = User::where('user_type', 'customer')->count();
        $hotels_count = Hotel::where('type', 2)->count();
        $reservation = Reservation::where('status', 1)->count();
        $revenue = Reservation::where('status', 1)->sum('amount');
        // dd($hotels);
        return view('admin.dashboard', compact('hotels', 'customers', 'reservation', 'revenue', 'hotels_count'));
    }
     public function aprrove($booking){
        $approve = Hotel::find($booking);
        $approve->type = 2;
        $approve->save();
        // dd($approve);
        return redirect()->back()->with('success', 'Hotel Approved');
    }
    public function decline($booking){
        $decline = Hotel::find($booking);
        $decline->type = 3;
        $decline->save();
        return redirect()->back()->with('success', 'Hotel Rejected');
    }

    public function manage(){
        $hotels = Hotel::with('cities.district', 'user')->get();
        // dd($hotels);
        return view('admin.manage', compact('hotels'));
    }
}
