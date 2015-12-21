<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Trip;
/*use Requests;*/

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
        /*foreach ($trips as $t){
            $t::numberOfPassenger();
        }*/
        return view('adminOverview', ['trips' => $trips]);
    }

    public function editTrips($id) {
        $trip = Trip::findOrDie($id);
        return view('adminTripEdit', ['trip' => $trip]);
    }

    public function newTrips() {
        return view('adminTripEdit');
    }



}
