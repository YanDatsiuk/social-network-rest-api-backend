<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\Post
 *
 * @property int $id
 * @property int|null $author_id
 * @property string|null $text
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\Image[] $images
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\PivotCommentPost[] $pivotCommentPosts
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\PivotPostImage[] $pivotPostImages
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\PivotPostLike[] $pivotPostLikes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\PivotPostWall[] $pivotPostWalls
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\User[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\REST\Wall[] $walls
 * @method static \Illuminate\Database\Query\Builder|\App\REST\Post whereAuthorId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\Post whereText($value)
 * @mixin \Eloquent
 */
class Post extends Model
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
    protected $table = 'posts';

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
     * pivotCommentPosts.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pivotCommentPosts()
    {
        return $this->hasMany('App\REST\PivotCommentPost', 'post_id');
    }

	/**
     * pivotPostImages.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pivotPostImages()
    {
        return $this->hasMany('App\REST\PivotPostImage', 'post_id');
    }

	/**
     * pivotPostLikes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pivotPostLikes()
    {
        return $this->hasMany('App\REST\PivotPostLike', 'post_id');
    }

	/**
     * pivotPostWalls.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pivotPostWalls()
    {
        return $this->hasMany('App\REST\PivotPostWall', 'post_id');
    }

    

	/**
     * Comments.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function comments()
    {
        return $this->belongsToMany(
            'App\REST\Comment',
            'pivot_comment_post',
            'post_id',
            'comment_id');
    }

	/**
     * Images.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function images()
    {
        return $this->belongsToMany(
            'App\REST\Image',
            'pivot_post_image',
            'post_id',
            'image_id');
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
            'pivot_post_like',
            'post_id',
            'user_id');
    }

	/**
     * Walls.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function walls()
    {
        return $this->belongsToMany(
            'App\REST\Wall',
            'pivot_post_wall',
            'post_id',
            'wall_id');
    }
}
