<?php

namespace App\REST\Transformers;

use Illuminate\Database\Eloquent\Model;
use TMPHP\RestApiGenerators\AbstractEntities\TransformerAbstract;


class PivotPostImageTransformer extends TransformerAbstract
{

    /**
     * 
     *
     * @var array
     */
    protected $availableIncludes = [
        'post', 'image', 
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