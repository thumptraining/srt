<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Weight
 *
 * @property $id
 * @property $peso
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Weight extends Model
{
    
    static $rules = [
		'peso' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['peso','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'user_id')->withDefault();
    }
    

}
