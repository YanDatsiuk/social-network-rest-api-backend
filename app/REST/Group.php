<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\Group
 *
 * @property int $id
 * @property int|null $wall_id
 * @property string|null $title
 * @property string|null $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\PivotUserGroup[] $pivotUserGroups
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\User[] $users
 * @property-read \App\REST\Wall|null $wall
 * @method static \Illuminate\Database\Query\Builder|\App\REST\Group whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\Group whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\Group whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\Group whereWallId($value)
 * @mixin \Eloquent
 */
class Group extends Model
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
    protected $table = 'groups';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'wall_id', 
		'title', 
		'description', 
		
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
     * pivotUserGroups.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pivotUserGroups()
    {
        return $this->hasMany('App\REST\PivotUserGroup', 'group_id');
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
            'pivot_user_group',
            'group_id',
            'member_id');
    }
}
