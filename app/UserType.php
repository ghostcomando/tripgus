<?php

namespace Tripgus;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
	protected $table = 'User_types';
	protected $fillable = ['userType'];

    public function userRoles()
    {
        return $this->hasMany('Tripgus\UserRole');
    }
}
