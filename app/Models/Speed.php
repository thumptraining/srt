<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Speed
 *
 * @property $id
 * @property $distance
 * @property $hours
 * @property $minute
 * @property $seconds
 * @property $pminute
 * @property $pseconds
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Speed extends Model
{
    
    static $rules = [
		'distance' => 'required',
		'hours' => 'required',
		'minute' => 'required',
		'seconds' => 'required',
		'pminute' => 'required',
		'pseconds' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['distance','hours','minute','seconds','pminute','pseconds','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'user_id');
    }
    

}
