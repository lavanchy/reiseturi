<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Trip;
use App\User;

class HomeController extends Controller
{
    //
    
    
    public function getTrips(){
        $trips = Trip::all();
        return view ('startpage', compact($trips));
    }
    
    public function bookTrip($id){
         $trip = Trip::findOrFail($id);
         //TODO überprüfe die max anzahl an teilnehmer 
         $user = User::find(1); // TODOget curent user
         //if ()
             return view ('registration', compact($trip), compact($user));
    }
    
    public function logIn(){
        //??? Notwendig | Richtiger ort?
    }
}
