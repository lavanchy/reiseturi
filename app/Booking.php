<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model {

    protected $fillabal = array('name', 'countPasanger', 'paymentTyp', 'paymentStatus', 'note', 'price', 'userID');

    /**
     * Grab all 
     * @return type return user
     */
    public function users() {
        // return $this->belongsTo('App\User','bookings_trip')->withTimestamps();
        return $this->belongsTo('App\User');
    }

    /**
     * Grab all 
     * @return type return user
     */
    public function trips() {

        return $this->belongsTo('App\Trip');
    }

    public function getTripID() {
        return $this->getTripID();
    }

    public function getcountPasanger() {
        return $this->getcountPasanger();
    }

}
