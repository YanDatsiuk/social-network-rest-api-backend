<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\AuthActionGroup;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\AuthActionGroupTransformer;

class AuthActionGroupController extends ControllerAbstract
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
            'action_id' => 'integer|between:0,4294967295|exists:auth_actions,id', 
			'group_id' => 'integer|between:0,4294967295|exists:auth_groups,id', 
			
       ],
       'update'  => [
            'action_id' => 'integer|between:0,4294967295|exists:auth_actions,id', 
			'group_id' => 'integer|between:0,4294967295|exists:auth_groups,id', 
			
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * AuthActionGroupController constructor.
     */
    public function __construct()
    {
        parent::__construct(new AuthActionGroup(), AuthActionGroupTransformer::class);
    }

}