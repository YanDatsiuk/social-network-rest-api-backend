<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\AuthGroupUser;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\AuthGroupUserTransformer;

class AuthGroupUserController extends ControllerAbstract
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
            'group_id' => 'integer|between:0,4294967295|exists:auth_groups,id', 
			'user_id' => 'integer|between:0,4294967295|exists:users,id', 
			
       ],
       'update'  => [
            'group_id' => 'integer|between:0,4294967295|exists:auth_groups,id', 
			'user_id' => 'integer|between:0,4294967295|exists:users,id', 
			
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * AuthGroupUserController constructor.
     */
    public function __construct()
    {
        parent::__construct(new AuthGroupUser(), AuthGroupUserTransformer::class);
    }

}