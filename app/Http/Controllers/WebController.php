<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Models\District;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index()
    {
        $hotels = Hotel::Where('type', 2)->orderBy('created_at', 'desc')->with(['cities.district'])->get(['id','title','city','address','zip_code','thumbnail','price_from'])->take(9);
        // dd($hotels->toArray());
        // $hotels = Hotel::with(['cities.district'])->first();
        // dd($hotels);
        return view('index-01',compact('hotels'));
    }

    public function search(Request $request){
        $request->validate([
            'min'=>'nullable|numeric',
            'max'=>'nullable|numeric',
        ]);
        // dd($request->toArray());
        $min = (float)$request->min;
        $max = (float)$request->max;
        $disId = $request->district;
        $cisId = $request->city;


        $hotels = Hotel::where('status', true)->with('cities.district')
        ->when($request->city, function ($query, $cityId) {
            return $query->where('city', $cityId);
        })
        ->when($request->district, function ($query, $districtId) {
            return $query->whereHas('cities.district', function ($query) use ($districtId) {
                return $query->where('district_id', $districtId);
            });
        })
        ->when($min, function ($query, $minPrice) {
            return $query->where('price_from', '>=', $minPrice);
        })
        ->when($max, function ($query, $maxPrice) {
            return $query->where('price_from', '<=', $maxPrice);
        })
        ->select(['id', 'title', 'district', 'city', 'address', 'zip_code', 'thumbnail', 'price_from'])
        ->paginate(10);
        // ;
        // $districts = District::with('city')->get();
        $cities = City::with('district')->get();

        // dd($hotels);
        return view('hotels', compact('hotels','cities'));
    }

    public function hotels(){
        $hotels = Hotel::where('type', 2)->with(['cities.district'])->select(['id','city', 'title', 'address', 'zip_code', 'thumbnail', 'price_from'])->paginate(9);
        // dd($hotels);

        $cities = City::with('district')->get();
        return view('hotels',compact('hotels','cities'));
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
