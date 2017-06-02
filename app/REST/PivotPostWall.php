<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\PivotPostWall
 *
 * @property int $id
 * @property int|null $post_id
 * @property int|null $wall_id
 * @property-read \App\REST\Post|null $post
 * @property-read \App\REST\Wall|null $wall
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotPostWall whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotPostWall wherePostId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotPostWall whereWallId($value)
 * @mixin \Eloquent
 */
class PivotPostWall extends Model
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
    protected $table = 'pivot_post_wall';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'post_id', 
		'wall_id', 
		
    ];

    

	/**
     * post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('App\REST\Post');
    }

	/**
     * wall.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wall()
    {
        return $this->belongsTo('App\REST\Wall');
    }

    

    
}
