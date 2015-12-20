<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookingController extends Controller {

    public function book() {
        $input = Requests::all();
        $booking = App\Booking::updateOrCreate($input);
        $userID = $booking::userID;
        returnToUserBooking($userID);
    }

    public function deletBooking($id) {
        $booking = App\Booking::findOrNew($id);
        $userID = $booking::userID;
        \App\Booking::destroy($id);

        returnToUserBooking($userID);
    }

    private function returnToUserBooking($userID) {
        $bokings = \App\Booking::all();
        $userBookings;

        foreach ($bokings as $b) {
            if ($b::userID == $booking::userID) {
                $userBookings::add($b);
            }
        }
        return view('customerLogin', compact($userBookings)); // TODO Corect view
    }

}
