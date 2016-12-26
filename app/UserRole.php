<?php

namespace Tripgus;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{

	protected $table = 'user_roles';
	protected $fillable = ['user_id', 'UserType_id'];

    public function user()
    {
        return $this->belongsTo('Tripgus\User');
    }

    public function userType()
    {
        return $this->belongsTo('Tripgus\UserType');
    }
}
