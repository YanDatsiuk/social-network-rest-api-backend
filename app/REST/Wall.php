<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\Wall
 *
 * @property int $id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\Group[] $groups
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\PivotPostWall[] $pivotPostWalls
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\Post[] $posts
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\REST\Wall whereId($value)
 * @mixin \Eloquent
 */
class Wall extends Model
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
    protected $table = 'walls';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        
    ];

    

    

	/**
     * groups.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groups()
    {
        return $this->hasMany('App\REST\Group', 'wall_id');
    }

	/**
     * pivotPostWalls.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pivotPostWalls()
    {
        return $this->hasMany('App\REST\PivotPostWall', 'wall_id');
    }

	/**
     * users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\REST\User', 'wall_id');
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
            'pivot_post_wall',
            'wall_id',
            'post_id');
    }
}
