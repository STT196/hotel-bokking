<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function pending(){
        $new_request = Reservation::with('user')->where('status','=',0)->
        whereHas('user',function($query){
            $query->where('user_id',Auth::user()->id);
        })
        ->orderBy('created_at','desc')->get();
        // dd($new_request);
        return view('customer.pending',compact('new_request'));
    }
    public function history(){
        $new_request = Reservation::with('user')->where('status','>',0)->
        whereHas('user',function($query){
            $query->where('user_id',Auth::user()->id);
        })
        ->orderBy('created_at','desc')->get();
        // dd($new_request);
        return view('customer.history',compact('new_request'));
    }
}
