<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\AuthGroupUser
 *
 * @property int $id
 * @property int|null $group_id
 * @property int|null $user_id
 * @property-read \App\REST\AuthGroup|null $group
 * @property-read \App\REST\User|null $user
 * @method static \Illuminate\Database\Query\Builder|\App\REST\AuthGroupUser whereGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\AuthGroupUser whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\AuthGroupUser whereUserId($value)
 * @mixin \Eloquent
 */
class AuthGroupUser extends Model
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
    protected $table = 'auth_group_user';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'group_id', 
		'user_id', 
		
    ];

    

	/**
     * group.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo('App\REST\AuthGroup');
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
