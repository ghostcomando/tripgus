<?php

namespace Tripgus;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
	protected $fillable = ['city', 'state_id'];

	public function state()
    {
        return $this->belongsTo('Tripgus\state');
    }
}
