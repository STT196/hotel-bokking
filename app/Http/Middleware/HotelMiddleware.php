<?php

namespace App\Http\Middleware;

use App\Models\Reservation;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class HotelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $user = Reservation::with('hotel')->where('id',$request->route('booking'))->first()->hotel->user_id;
        // dd($user);
        if (Auth::check() && Auth::user()->user_type === 'hotel' && Auth::user()->id === Reservation::with('hotel')->where('id',$request->route('booking'))->first()->hotel->user_id) {
            return $next($request);
        }
        abort(403, 'Unauthorized');
    }
}
