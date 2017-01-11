<?php

namespace Tripgus;

use Illuminate\Database\Eloquent\Model;

class RegistrationLogin extends Model
{
    protected $table = 'registration_logins';
	protected $fillable = ['user_id'];

	public function user()
	{
	    return $this->belongsTo('Tripgus\User');
	}
}


