<?php

namespace Tripgus;

use Illuminate\Database\Eloquent\Model;

class TouristicPlan extends Model
{
    protected $table = 'touristic_plans';
	protected $fillable = ['touristicPlan', 'description', 'city_id', 'user_id'];

	public function city()
    {
        return $this->belongsTo('Tripgus\City');
    }

    public function user()
    {
        return $this->belongsTo('Tripgus\User');
    }

    public function reservations()
    {
        return $this->hasMany('Tripgus\Reservation');
    }		
}
