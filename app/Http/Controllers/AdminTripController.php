<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use App\Http\Controllers\Controller;
use App\Booking;
use App\Bill;
use Log;


class AdminTripController extends Controller {

    public function saveTrip(Request $request) {
        //TODO get post elements
        $trip = new Trip;
        //$input = $request->except('_token');
        //$trip = Trip::updateOrCreate($input);
        Log::debug($request);
        $trip->destination = $request->destination;
        $trip->depart = $request->depart;
        $trip->startDate = $request->startDate;
        $trip->endDate = $request->endDate;
        $trip->preis = $request->preis;
        $trip->description = $request->description;
        if (!$trip->save()){
            App::abort(500,'Error');
        }
        return redirect('admin/editTrip/'.$trip->id);
        //return view('adminTripEdit', ['trip'=>$trip]);
    }

    public function printPasangers() {
        //TODO
        return view('adminOverview'); // Feedbacks? with view
    }

    public function createBill() {
        $input = Requests::all();

        $b = App\Bill::updateOrCreate($input);
        $trip = Trip::find($b::trip_id);

        return view('adminTripEdit', ['trip'=>$trip]);
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
        return view('adminTripEdit', ['trip'=>$trip]);
    }
    
     public function editTrips($id) {
        $trip = Trip::findOrFail($id);
        $bookings = Booking::where('trip_id',$id)->get();
        $bills = Bill::where('trip_id',$id)->get();
        return view('adminTripEdit', ['trip'=>$trip, 'bookings'=>$bookings, 'bills'=>$bills]);
    }

}
