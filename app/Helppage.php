<?php

namespace Tripgus;

use Illuminate\Database\Eloquent\Model;

class Helppage extends Model
{
    protected $table = 'helppages';
	protected $fillable = ['helppageName'];

	public function infos()
    {
        return $this->hasMany('App\Info');
    }
}
