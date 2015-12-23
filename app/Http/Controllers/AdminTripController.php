<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use App\Http\Controllers\Controller;
use App\Booking;
use App\Bill;
use Log;

class AdminTripController extends Controller {

    public function newTrip() {
        $trip = new Trip;
        if (!$trip->save()) {
            App::abort(500, 'Error');
        }
        return redirect('admin/editTrip/' . $trip->id);
    }

    public function saveTrip(Request $request, $id) {
        $this->validate($request, [
            'destination' => 'required',
            'depart' => 'required',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',
            'preis' => 'required|numeric']);
        //TODO get post elements
        $trip = Trip::findOrFail($id);
        //$input = $request->except('_token');
        //$trip = Trip::updateOrCreate($input);
        $trip->destination = $request->destination;
        $trip->depart = $request->depart;
        $trip->startDate = $request->startDate;
        $trip->endDate = $request->endDate;
        $trip->preis = $request->preis;
        $trip->description = $request->description;
        if (!$trip->save()) {
            App::abort(500, 'Error');
        }
        return redirect('admin/editTrip/' . $trip->id);
        //return view('adminTripEdit', ['trip'=>$trip]);
    }

    public function printPasangers() {
        //TODO
        return view('adminOverview'); // Feedbacks? with view
    }

    public function createBill(Request $request, $id) {
        //$input = Requests::all();
        $this->validate($request, [
            'trip_id' => 'required',
            'invoicingParty' => 'required|min:3',
            'date' => 'required|date',
            'note' => 'required|min:20',
            'amountCHF' => 'required|numeric']);
        $b = new Bill;
        $b->trip_id = $id;
        $b->invoicingParty = $request->invoicingParty;
        $b->amountCHF = $request->amountCHF;
        $b->date = $request->date;
        $b->note = $request->note;
        $b->save();


        return redirect('admin/editTrip/' . $id);
    }

    public function createPassenger(Request $request, $id) {
        //$input = Requests::all();
        $this->validate($request, [
            'trip_id' => 'required',
            'name' => 'required|min:3',
            'countPasanger' => 'required']);
        $passenger = new Booking;
        $passenger->trip_id = $id;
        $passenger->name = $request->name;
        $passenger->countPasanger = $request->countPassenger;
        $passenger->save();


        return redirect('admin/editTrip/' . $id);
    }

//*/

    public function cloneTrip($id) {
        $trip = new Trip;
        $tripToCopy = Trip::findOrFail($id);
        $trip->destination = $tripToCopy->destination;
        $trip->depart = $tripToCopy->depart;
        $trip->startDate = $tripToCopy->startDate;
        $trip->endDate = $tripToCopy->endDate;
        $trip->description = $tripToCopy->description;
        if (!$trip->save()) {
            App::abort(500, 'Error');
        }
        return redirect('admin/editTrip/' . $trip->id);
    }

    public function deleteTrip($id, $tripID) {
        $deletedRows = Trip::where('id', $tripID)->delete();
        return redirect('adminOverview');
    }

    public function deleteBill($id, $billID) {
        $deletedRows = Bill::where('id', $billID)->delete();
        return redirect('admin/editTrip/' . $id);
    }

    public function deletePassenger($id, $bookingID) {
        $deletedRows = Booking::where('id', $bookingID)->delete();
        return redirect('admin/editTrip/' . $id);
    }

    public function editTrips($id) {
 
        $trip = Trip::findOrFail($id);
        $bookings = Booking::where('trip_id', $id)->get();
        $bills = Bill::where('trip_id', $id)->get();
        $billSum = Bill::where('trip_id', $id)->sum('amountCHF');
        $countPassenger = Booking::where('trip_id', $id)->sum('countPasanger');
        $income = $countPassenger * $trip->preis;
        return view('adminTripEdit', ['trip' => $trip, 'bookings' => $bookings, 'bills' => $bills, 'billSum' => $billSum, 'income' => $income]);
    }

}
