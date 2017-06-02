<?php

namespace App\REST\Transformers;

use Illuminate\Database\Eloquent\Model;
use TMPHP\RestApiGenerators\AbstractEntities\TransformerAbstract;


class UserTransformer extends TransformerAbstract
{

    /**
     * 
     *
     * @var array
     */
    protected $availableIncludes = [
        'wall', 'authGroupUsers', 'pivotPostLikes', 'pivotUserGroups', 'authGroups', 'posts', 'groups', 
    ];

    /**
     *
     */
    private $validParams = ['limit', 'order'];

    /**
     * Transform model data to array.
     *
     * @param Model $model
     * @return array
     */
    public function transform(Model $model)
    {
        return $model->toArray();
    }
}