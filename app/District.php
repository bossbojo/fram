<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

	protected $fillable = [
        'name',
        'province_id',
		'latitude',
		'longitude'
	];



	public $timestamps = false;
    /**
     * A District has many Sub Districts
     */
    public function sub_districts()
    {
        return $this->hasMany(SubDistrict::class);
    }

    /**
     * A District has one Province
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
