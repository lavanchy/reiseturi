<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model {

    protected $fillable = array('destination', 'startDate', 'endDate', 'preis', 'description');

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
    
    public function numberOfPasanger(){
        $amount =0;
        // TODO get the amount of the pasanger outh of the booking
        return $amount;
    }

}


