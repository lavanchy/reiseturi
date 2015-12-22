<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = array('invoicingParty', 'amountCHF','date', 'note', 'trip_id');
    
    /**
     * to with trip the bill belongs
     * @return type Illuminate\Database\Eloquent\Relation\BelongsTo 
     */
    public function owner() {
       return $this->belongsTo('App\Trip');
       
    }
    
}


