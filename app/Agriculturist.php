<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agriculturist extends Model
{
  use SoftDeletes;

  protected $table = 'agriculturists';
  protected $fillable = ['user_id','home_no','phone_no','province_id','district_id','subdistrict_id','deleted_at'];
  public $timestamps = true;


  public function user()
  {
      return $this->belongsTo(User::class ,'user_id','id' );
  }
}
