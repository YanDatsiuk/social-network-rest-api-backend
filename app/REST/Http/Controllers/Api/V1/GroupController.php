<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\Group;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\GroupTransformer;

class GroupController extends ControllerAbstract
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
            'wall_id' => 'integer|between:0,4294967295|exists:walls,id', 
			'title' => 'string', 
			'description' => 'string', 
			
       ],
       'update'  => [
            'wall_id' => 'integer|between:0,4294967295|exists:walls,id', 
			'title' => 'string', 
			'description' => 'string', 
			
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * GroupController constructor.
     */
    public function __construct()
    {
        parent::__construct(new Group(), GroupTransformer::class);
    }

}