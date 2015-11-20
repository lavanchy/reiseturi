<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model {

    protected $fillabal = array('destination', 'startDate', 'endDate', 'preis', 'description');

    /**
     * returns alll Bills of the Trip
     * @return type Illuminate\Database\Eloquent\Relation\HasMany; 
     */
    public function bills() {
        return $this->hasMany('App\Bill');
    }
    
    public function bookings() {
        return $this->belongsToMany('App\Booking', 'Booking_trip')->withTimestamps();
        
    }

}


