<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\PivotPostWall;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\PivotPostWallTransformer;

class PivotPostWallController extends ControllerAbstract
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
			'wall_id' => 'integer|between:0,4294967295|exists:walls,id', 
			
       ],
       'update'  => [
            'post_id' => 'integer|between:0,4294967295|exists:posts,id', 
			'wall_id' => 'integer|between:0,4294967295|exists:walls,id', 
			
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * PivotPostWallController constructor.
     */
    public function __construct()
    {
        parent::__construct(new PivotPostWall(), PivotPostWallTransformer::class);
    }

}