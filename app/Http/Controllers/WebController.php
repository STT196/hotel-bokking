<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $hotels = Hotel::orderBy('created_at', 'desc')->get(['id','title','address','zip_code','district','thumbnail','price_from'])->take(10);
        // dd($hotels);
        return view('index-01',compact('hotels'));
    }

    public function show($hotel)
    {
        $details = Hotel::where('id',$hotel)->first();
        // dd($details);
        return view('hotel_view',compact('details'));
    }
}
