<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminTripController extends Controller {

    public function saveTrip() {
        //TODO get post elements

        $input = Requests::all();
        $trip = Trip::updateOrCreate($input);
        Trip::save();
        return view('adminTripEdit', compact($trip));
    }

    public function printPasangers() {
        //TODO
        return view('adminOverview'); // Feedbacks? with view
    }

    public function createBill() {
        $input = Requests::all();

        $b = App\Bill::updateOrCreate($input);
        $trip = Trip::find($b::trip_id);

        return view('adminTripEdit', compact($trip));
    }

//*/

    public function cloneTrip($id) {
        //CK Rechtschreibung korrigert
        $attributes = Trip::find($id);
        $t = $attributes__clone();
        return view('adminTripEdit', compact($t));
    }

    public function deletTrip($id) {
        Trip::destroy($id);
        return view('adminOverview');
    }

    public function deletBill($id) {
        $bill = \App\Bill::findOrNew($id);
        $tripID = $bill::trip_id;
        \App\Bill::destroy($id);
        $trip = Trip::findOrNew($tripID);
        return view('adminTripEdit', compact($trip));
    }

}
