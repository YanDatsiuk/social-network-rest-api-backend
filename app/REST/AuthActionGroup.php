<?php

namespace App\REST;

use Illuminate\Database\Eloquent\Model;

/**
 * App\REST\AuthActionGroup
 *
 * @property int $id
 * @property int|null $action_id
 * @property int|null $group_id
 * @property-read \App\REST\AuthAction|null $action
 * @property-read \App\REST\AuthGroup|null $group
 * @method static \Illuminate\Database\Query\Builder|\App\REST\AuthActionGroup whereActionId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\AuthActionGroup whereGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\REST\AuthActionGroup whereId($value)
 * @mixin \Eloquent
 */
class AuthActionGroup extends Model
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
    protected $table = 'auth_action_group';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'action_id', 
		'group_id', 
		
    ];

    

	/**
     * action.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function action()
    {
        return $this->belongsTo('App\REST\AuthAction');
    }

	/**
     * group.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo('App\REST\AuthGroup');
    }

    

    
}
