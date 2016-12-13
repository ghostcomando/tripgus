<?php

namespace Tripgus;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
	protected $table = 'infos';
	protected $fillable = ['titulo', 'descripcion', 'helppage_id'];

	public function helppage()
    {
        return $this->belongsTo('Tripgus\Helppage');
    }
}
