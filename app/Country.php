<?php

namespace Tripgus;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
	protected $fillable = ['country'];

    public function states()
    {
        return $this->hasMany('Tripgus\State');
    }

    public function touristicPlans()
    {
        return $this->hasMany('Tripgus\TouristicPlan');
    }
}
