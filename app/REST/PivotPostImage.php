<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\PivotPostImage
 *
 * @property int $id
 * @property int|null $image_id
 * @property int|null $post_id
 * @property-read \App\REST\Image|null $image
 * @property-read \App\REST\Post|null $post
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotPostImage whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotPostImage whereImageId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotPostImage wherePostId($value)
 * @mixin \Eloquent
 */
class PivotPostImage extends Model
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
    protected $table = 'pivot_post_image';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'image_id', 
		'post_id', 
		
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
     * image.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function image()
    {
        return $this->belongsTo('App\REST\Image');
    }

    

    
}
