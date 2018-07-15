<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourPacket extends Model
{
    protected $table = 'tour_packet';
    
    public function destination()
    {
        return $this->hasOne('App\Models\Destination','id','destination_id');
    }
}

