<?php

namespace App\REST\Transformers;

use Illuminate\Database\Eloquent\Model;
use TMPHP\RestApiGenerators\AbstractEntities\TransformerAbstract;


class PostTransformer extends TransformerAbstract
{

    /**
     * 
     *
     * @var array
     */
    protected $availableIncludes = [
        'pivotPostLikes', 'pivotPostWalls', 'users', 'walls', 
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