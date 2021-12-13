<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Intermediate
 *
 * @property $id
 * @property $week
 * @property $day
 * @property $stages
 * @property $categories
 * @property $warm
 * @property $whours
 * @property $wminute
 * @property $wseconds
 * @property $wzone
 * @property $rep
 * @property $workout
 * @property $thours
 * @property $tminute
 * @property $tseconds
 * @property $tzone
 * @property $cool
 * @property $chours
 * @property $cminute
 * @property $cseconds
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Intermediate extends Model
{
    
    static $rules = [
		'week' => 'required',
		'day' => 'required',
		'stages' => 'required',
		'categories' => 'required',
		'warm' => 'required',
		'whours' => 'required',
		'wminute' => 'required',
		'wseconds' => 'required',
		'wzone' => 'required',
		'rep' => 'required',
		'workout' => 'required',
		'thours' => 'required',
		'tminute' => 'required',
		'tseconds' => 'required',
		'tzone' => 'required',
		'cool' => 'required',
		'chours' => 'required',
		'cminute' => 'required',
		'cseconds' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['week','day','stages','categories','warm','whours','wminute','wseconds','wzone','rep','workout','thours','tminute','tseconds','tzone','cool','chours','cminute','cseconds'];



}
