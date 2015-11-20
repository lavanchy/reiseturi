<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillabal = array('invoicingParty', 'amountCHF','date', 'note');
    
    /**
     * to with trip the bill belongs
     * @return type Illuminate\Database\Eloquent\Relation\BelongsTo 
     */
    public function owner() {
       return $this->belongsTo('App\Trip');
       
    }
    
}


