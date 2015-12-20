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
    
    //CK habe compact($trips) durch ['trips'=>$trips] ersetzt, da sonst ein Einfügen in die View nicht möglich war.
    public function getTrips(){
        $trips = Trip::all();
    return view ('startpage', ['trips'=>$trips]);
    }
    
    public function bookTrip($id){
         $trip = Trip::findOrFail($id);
         $user = User::find(1); // TODOget curent user
         if ($trip::freeSets(1)){
              return view ('registration', compact($trip), compact($user));
         }
         return view ('startpage', ['trips'=>$trips]);// TODO SRY over boocked
        
        
    }
    
    public function logIn(){
        //??? Notwendig | Richtiger ort?
    }
}
