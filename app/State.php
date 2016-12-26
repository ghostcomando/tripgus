<?php

namespace Tripgus;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
	protected $fillable = ['state', 'country_id'];
    
    public function country()
    {
        return $this->belongsTo('Tripgus\Country');
    }

     public function cities()
    {
        return $this->hasMany('Tripgus\City');
    }
}
