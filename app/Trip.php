<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model {
    protected $passenger;
    protected $fillable = array('destination', 'depart', 'startDate', 'endDate', 'preis', 'description');
    protected $bills;
    protected $maxPassenger= 20;

    /**
     * returns alll Bills of the Trip
     * @return type Illuminate\Database\Eloquent\Relation\HasMany; 
     */
    public function bills() {
        return $this->hasMany('App\Bill');
    }
    
    
    /**
     * tutorial https://laracasts.com/series/laravel-5-fundamentals/episodes/21
     * @return type
     */
    public function bookings() {
        return $this->hasMany('App\Booking');
        //return $this->belongsToMany('App\Booking', 'bookings_trip')->withTimestamps();
        
    }
    
    public static function numberOfPassenger($id){
        //$amount =0;
       /* $trips = Trip::all();
        $bookings =  Booking::all();
        foreach ($bookings as $b){
            if( $b->tripID == $this->id){
             $amount += $b->countPasanger;  
            }
        }*/
        $passengers = Booking::where('trip_id',$id)->sum('countPasanger');
        //$this->passenger =$passengers;
        return $passengers;
    }
    
     public function fethBills(){
       
       // $trips = Trip::all();
        $bill = Bill::all();
        foreach ($bill as $b){
            if( $b->tripID == $this->id){
                $this->bills->add($b); 
            }
        }
        
    }
    
     public function freeSets($requestetPlace) {
       numberOfPassenger();
       $requestetPlace += $this-->pasanger;
         if ( $requestetPlace <= $this->maxPassenger){
             return TRUE;
         }
         return FALSE;
    }

}


