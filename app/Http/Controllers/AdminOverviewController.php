<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminOverviewController extends Controller
{
    /*TODOS
     * 
     * 1. Auth controliren etc 
     * 2. Requests --> controlle der inputs
     * 3. Funktionen ausprogramiren
     * 
     * 
     */
    
    
    public function getTrips(){
        $trips = Trip::all();
        // //TODO including nr of pasanger
        return view ('startpage', compact($trips));
    }
    public function newTrips(){
        return view ('adminTripEdit');
    }
        public function editTrips($id){
            $trip = \App\Trip::findOrDie($id);
        return view ('adminTripEdit', compact($trip));
    }
    
  
}
