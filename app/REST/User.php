<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\User
 *
 * @property int $id
 * @property int|null $wall_id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\AuthGroupUser[] $authGroupUsers
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\AuthGroup[] $authGroups
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\Group[] $groups
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\PivotPostLike[] $pivotPostLikes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\PivotUserGroup[] $pivotUserGroups
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\Post[] $posts
 * @property-read \App\REST\Wall|null $wall
 * @method static \Illuminate\Database\Query\Builder|\App\REST\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\User whereWallId($value)
 * @mixin \Eloquent
 */
class User extends Model
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
    protected $table = 'users';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'wall_id', 
		'name', 
		'email', 
		'password', 
		'remember_token', 
		'created_at', 
		'updated_at', 
		
    ];

    

	/**
     * wall.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wall()
    {
        return $this->belongsTo('App\REST\Wall');
    }

    

	/**
     * authGroupUsers.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function authGroupUsers()
    {
        return $this->hasMany('App\REST\AuthGroupUser', 'user_id');
    }

	/**
     * pivotPostLikes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pivotPostLikes()
    {
        return $this->hasMany('App\REST\PivotPostLike', 'user_id');
    }

	/**
     * pivotUserGroups.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pivotUserGroups()
    {
        return $this->hasMany('App\REST\PivotUserGroup', 'member_id');
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
            'auth_group_user',
            'user_id',
            'group_id');
    }

	/**
     * Posts.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany(
            'App\REST\Post',
            'pivot_post_like',
            'user_id',
            'post_id');
    }

	/**
     * Groups.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function groups()
    {
        return $this->belongsToMany(
            'App\REST\Group',
            'pivot_user_group',
            'member_id',
            'group_id');
    }
}
