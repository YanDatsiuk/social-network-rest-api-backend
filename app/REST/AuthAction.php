<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\AuthAction
 *
 * @property int $id
 * @property string|null $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\AuthActionGroup[] $authActionGroups
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\AuthGroup[] $authGroups
 * @method static \Illuminate\Database\Query\Builder|\App\REST\AuthAction whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\AuthAction whereName($value)
 * @mixin \Eloquent
 */
class AuthAction extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Table Name.
     *
     * @var string
     */
    protected $table = 'auth_actions';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'name', 
		
    ];

    

    

	/**
     * authActionGroups.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function authActionGroups()
    {
        return $this->hasMany('App\REST\AuthActionGroup', 'action_id');
    }

    

	/**
     * AuthGroups.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function authGroups()
    {
        return $this->belongsToMany(
            'App\REST\AuthGroup',
            'auth_action_group',
            'action_id',
            'group_id');
    }
}
