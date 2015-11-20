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
    
    
    /**
     * tutorial https://laracasts.com/series/laravel-5-fundamentals/episodes/21
     * @return type
     */
    public function bookings() {
        return $this->belongsToMany('App\Booking', 'bookings_trip')->withTimestamps();
        
    }

}


