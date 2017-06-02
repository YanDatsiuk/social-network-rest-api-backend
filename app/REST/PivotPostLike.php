<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\PivotPostLike
 *
 * @property int $id
 * @property int|null $post_id
 * @property int|null $user_id
 * @property-read \App\REST\Post|null $post
 * @property-read \App\REST\User|null $user
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotPostLike whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotPostLike wherePostId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotPostLike whereUserId($value)
 * @mixin \Eloquent
 */
class PivotPostLike extends Model
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
    protected $table = 'pivot_post_like';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'post_id', 
		'user_id', 
		
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
     * user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\REST\User');
    }

    

    
}
