<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\PivotCommentPost
 *
 * @property int $id
 * @property int|null $comment_id
 * @property int|null $post_id
 * @property-read \App\REST\Comment|null $comment
 * @property-read \App\REST\Post|null $post
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotCommentPost whereCommentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotCommentPost whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotCommentPost wherePostId($value)
 * @mixin \Eloquent
 */
class PivotCommentPost extends Model
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
    protected $table = 'pivot_comment_post';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'comment_id', 
		'post_id', 
		
    ];

    

	/**
     * comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comment()
    {
        return $this->belongsTo('App\REST\Comment');
    }

	/**
     * post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('App\REST\Post');
    }

    

    
}
