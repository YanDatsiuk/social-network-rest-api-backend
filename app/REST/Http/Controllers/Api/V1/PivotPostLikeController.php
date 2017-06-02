<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\PivotPostLike;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\PivotPostLikeTransformer;

class PivotPostLikeController extends ControllerAbstract
{
    /**
     * Validation rules for request parameters.
     *
     * @var array $rules
     */
     protected $rules = [
       'index'   => [
            
       ],
       'store'   => [
            'post_id' => 'integer|between:0,4294967295|exists:posts,id', 
			'user_id' => 'integer|between:0,4294967295|exists:users,id', 
			
       ],
       'update'  => [
            'post_id' => 'integer|between:0,4294967295|exists:posts,id', 
			'user_id' => 'integer|between:0,4294967295|exists:users,id', 
			
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * PivotPostLikeController constructor.
     */
    public function __construct()
    {
        parent::__construct(new PivotPostLike(), PivotPostLikeTransformer::class);
    }

}