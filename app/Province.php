<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';

	protected $fillable = [
		'name',
		'name_eng',
		'latitude',
		'longitude'
    ];
     
	public $timestamps = false;

    /**
     * A SubDistrict has many Districts
     */
    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
