<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function book() {
        $params = ""; //from post, userID, TripID etc.
        $booking = App\Booking::create($params);
         //TODO Returns
    }
}
