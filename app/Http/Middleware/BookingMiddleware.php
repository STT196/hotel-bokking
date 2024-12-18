<?php

namespace App\Http\Middleware;

use App\Models\Hotel;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BookingMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $temp=Hotel::find($request->hotel_id)->user_id;
        // $auth=Auth::user()->id;
        // dd($temp,$auth);
        if (Auth::check()) {
            return $next($request);
        }

            return redirect()->back()->with('error', 'Please login first');

    }
}
