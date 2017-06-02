<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\Comment
 *
 * @property int $id
 * @property int|null $author_id
 * @property string|null $text
 * @property-read \App\REST\User|null $author
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\PivotCommentPost[] $pivotCommentPosts
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\Post[] $posts
 * @method static \Illuminate\Database\Query\Builder|\App\REST\Comment whereAuthorId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\Comment whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\Comment whereText($value)
 * @mixin \Eloquent
 */
class Comment extends Model
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
    protected $table = 'comments';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'author_id', 
		'text', 
		
    ];

    

	/**
     * author.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('App\REST\User');
    }

    

	/**
     * pivotCommentPosts.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pivotCommentPosts()
    {
        return $this->hasMany('App\REST\PivotCommentPost', 'comment_id');
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
            'pivot_comment_post',
            'comment_id',
            'post_id');
    }
}
