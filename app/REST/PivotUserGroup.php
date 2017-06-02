<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\PivotUserGroup
 *
 * @property int $id
 * @property int|null $group_id
 * @property int|null $member_id
 * @property-read \App\REST\Group|null $group
 * @property-read \App\REST\User|null $member
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotUserGroup whereGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotUserGroup whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\PivotUserGroup whereMemberId($value)
 * @mixin \Eloquent
 */
class PivotUserGroup extends Model
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
    protected $table = 'pivot_user_group';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'group_id', 
		'member_id', 
		
    ];

    

	/**
     * group.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo('App\REST\Group');
    }

	/**
     * member.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function member()
    {
        return $this->belongsTo('App\REST\User');
    }

    

    
}
