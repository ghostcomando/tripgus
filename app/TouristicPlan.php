<?php

namespace Tripgus;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class TouristicPlan extends Model
{
    protected $table = 'touristic_plans';
	protected $fillable = ['description','price', 'image', 'city_id', 'user_id'];

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

    public function setImageAttribute($image)
    {
        $name = Carbon::now()->second.$image->getClientOriginalName();
        $this->attributes['image'] = $name;
        \Storage::disk('local')->put($name, \File::get($image));
    }		
}
