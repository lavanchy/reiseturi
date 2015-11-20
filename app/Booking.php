<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
     protected $fillabal = array('name','countPasanger','paymentTyp','paymentStatus','note');
     
     
     /**
      * Grab all 
      * @return type return user
      */
       public function users() {
    return $this->belongsTo('App\User','bookings_trip')->withTimestamps();
        
    }
     
}
