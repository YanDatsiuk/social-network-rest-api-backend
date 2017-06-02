<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\AuthGroup
 *
 * @property int $id
 * @property string|null $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\AuthActionGroup[] $authActionGroups
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\AuthAction[] $authActions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\AuthGroupUser[] $authGroupUsers
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\REST\AuthGroup whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\AuthGroup whereName($value)
 * @mixin \Eloquent
 */
class AuthGroup extends Model
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
    protected $table = 'auth_groups';

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
        return $this->hasMany('App\REST\AuthActionGroup', 'group_id');
    }

	/**
     * authGroupUsers.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function authGroupUsers()
    {
        return $this->hasMany('App\REST\AuthGroupUser', 'group_id');
    }

    

	/**
     * AuthActions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function authActions()
    {
        return $this->belongsToMany(
            'App\REST\AuthAction',
            'auth_action_group',
            'group_id',
            'action_id');
    }

	/**
     * Users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(
            'App\REST\User',
            'auth_group_user',
            'group_id',
            'user_id');
    }
}
