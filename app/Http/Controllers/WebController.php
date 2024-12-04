<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Models\District;

class WebController extends Controller
{
    public function index()
    {
        $hotels = Hotel::orderBy('created_at', 'desc')->with('districts:id,name_en','cities:id,name_en')->get(['id','title','district','city','address','zip_code','thumbnail','price_from'])->take(10);
        // dd($hotels);
        return view('index-01',compact('hotels'));
    }

    public function hotels(){
        $hotels = Hotel::with('districts:id,name_en','cities:id,name_en')->select(['id','title','district','city','address','zip_code','thumbnail','price_from'])->paginate(1);
        // dd($hotels);

        $districts = District::with('city')->get();
        return view('hotels',compact('hotels','districts'));
    }

    public function show($hotel)
    {
        $details = Hotel::where('id',$hotel)->with('districts:id,name_en','cities:id,name_en')->first();
        // dd($details);
        return view('hotel_view',compact('details'));
    }

    public function reserve(Request $request){
        // dd($request);
        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'tpnumber' => 'required|numeric|digits:10',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'adult_count' => 'required|integer|min:1',
            'child_count' => 'required|integer|min:0',
            'room_type' => 'required|numeric',
            // 'amount' => 'required|numeric|min:1',
        ]);
        $keword = '';
        if($request->room_type == 1){
            $keword = 'crn_price';
        }
        elseif($request->room_type == 2){
            $keword = 'luxury_room_price';
        }
        else{
            $keword = 'deluxe_room_price';
        }

        $start_date = \Carbon\Carbon::parse($request->start_date);
        $end_date = \Carbon\Carbon::parse($request->end_date);
        $days = 1 + $start_date->diffInDays($end_date);
        $hotel = Hotel::find($request->hotel_id);
        $total_price = intval($hotel->$keword) * $days;
        // dd($days,$total_price);

        $booking = new Reservation();
        $booking->hotel_id = $request->hotel_id;
        $booking->user_id = Auth::user()->id;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->tpnumber = $request->tpnumber;
        $booking->start_date = $request->start_date;
        $booking->end_date = $request->end_date;
        $booking->adult_count = $request->adult_count;
        $booking->child_count = $request->child_count;
        $booking->room_type = intval($request->room_type);
        $booking->amount = $total_price;
        $booking->save();

        return redirect()->back()->with('success', 'Reservation created successfully');

    }
}
