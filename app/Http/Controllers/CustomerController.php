<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function pending(){
        $new_request = Reservation::with('user')->where('status','=',0)
        ->orderBy('created_at','desc')->get();
        // dd($new_request);
        return view('customer.pending',compact('new_request'));
    }
    public function history(){
        $new_request = Reservation::with('user')->where('status','>',0)
        ->orderBy('created_at','desc')->get();
        // dd($new_request);
        return view('customer.history',compact('new_request'));
    }

    public function recipet($booking){
        // ->whereHas('user',function($query){
        //     $query->where('user_id',Auth::user()->id);
        // })
        $new_request = Reservation::find($booking)->with('user','hotel')->where('status','=',1)->first();
        if($new_request ==null){
            abort(404);
        }

        $start_date = \Carbon\Carbon::parse($new_request->start_date);
        $end_date = \Carbon\Carbon::parse($new_request->end_date);
        $days = intval(1 + $start_date->diffInDays($end_date));
        $room_type_name = '';
        $price=0;
        switch($new_request->room_type){
            case 1:
                $room_type_name = 'Comfort Room';
                $price = $new_request->hotel->crn_price;
                break;
            case 2:
                $room_type_name = 'Luxury Room';
                $price = $new_request->hotel->luxury_room_price;
                break;
            case 3:
                $room_type_name = 'Deluxe Room';
                $price = $new_request->hotel->deluxe_room_price;
                break;
        }

        $data=[
            'invoice_id'=>$new_request->id,
            'customer_name'=>$new_request->name,
            'hotel_name'=>$new_request->hotel->Title,
            'hotel_address'=>$new_request->hotel->address,
            'children'=>$new_request->child_count,
            'adults'=>$new_request->adult_count,
            'room_type'=>$room_type_name,
            'start_date'=>$new_request->start_date,
            'end_date'=>$new_request->end_date,
            'total_price'=>$new_request->amount,
            'days'=>$days,
           'price'=>$price,
           'checkin'=>$new_request->start_date,
           'checkout'=>$new_request->end_date,
            'hotel_phone'=>$new_request->hotel->telephone,


        ];
        // dd($data);
        $pdf = Pdf::loadView('customer.pdf',['data'=> $data]);
        return $pdf->stream('invoice.pdf');
    }
}
