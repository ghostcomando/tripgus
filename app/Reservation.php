<?php

namespace Tripgus;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
	protected $fillable = ['user_id', 'touristicPLan_id', 'initialDate', 'finalDate', 'price'];

	public function touristicPlan()
    {
        return $this->belongsTo('Tripgus\TouristicPlan');
    }

     public function user()
    {
        return $this->belongsTo('Tripgus\User');
    }

}
