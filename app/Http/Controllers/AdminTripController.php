<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminTripController extends Controller
{
    
    public function saveTrip(){
        //TODO get post elements
        
       $attributes = "new trip";// getit out of input
        $trip = \App\Trip::firstOrCreate($attributes);
         return view ('admin'); 
    }
    
    public function printPasangers(){
            //TODO
        return view ('admin'); // Feedbacks? with view
    }
    
    public function createBill(){
        //Todo get input
        $attributs ="";
        App\Bill::Create($attributs);
        
    }
    
    
    public function cloneTrip($id){
   
        $attributs = \App\Trip::find($id);
        return view ('adminTripEdit', compact($attributs)); 
        
    }
}
