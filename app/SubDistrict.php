<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDistrict extends Model
{
    protected $table = 'sub_districts';

	protected $fillable = [
		'post_code',
		'name',
		'id',
		'district_id'
	];

	public $timestamps = false;


    public function address()
    {
        return $this->belongsTo(District::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
