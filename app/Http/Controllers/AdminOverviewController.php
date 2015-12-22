<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Trip;
use App\Booking;
use Log;

/* use Requests; */

class AdminOverviewController extends Controller {
    /* TODOS
     * 
     * 1. Auth controliren etc 
     * 2. Requests --> controlle der inputs
     * 3. Funktionen ausprogramiren
     * 
     * 
     */

    public function getAdminTrips() {
        $trips = Trip::all();
        $passengers;
        Log::debug($trips);
        foreach ($trips as $t) {
             $p = $t::numberOfPassenger($t->id);
            Log::debug($p);
           $passengers::add($p);
            Log::debug($passengers);
           
        }
        return view('adminOverview', ['trips' => $trips, 'passengers' => $passengers]);
    }

    public function editTrips($id) {
        $trip = Trip::findOrDie($id);
        return view('adminTripEdit', ['trip' => $trip]);
    }

}
