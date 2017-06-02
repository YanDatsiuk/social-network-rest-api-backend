<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\User;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\UserTransformer;

class UserController extends ControllerAbstract
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
			'name' => 'string', 
			'email' => 'string|email|unique:users,email', 
			'password' => 'string', 
			'remember_token' => 'string', 
			
       ],
       'update'  => [
            'wall_id' => 'integer|between:0,4294967295|exists:walls,id', 
			'name' => 'string', 
			'email' => 'string|email|unique:users,email', 
			'password' => 'string', 
			'remember_token' => 'string', 
			
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        parent::__construct(new User(), UserTransformer::class);
    }

}