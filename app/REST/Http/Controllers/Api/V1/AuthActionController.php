<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\AuthAction;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\AuthActionTransformer;

class AuthActionController extends ControllerAbstract
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
            'name' => 'string', 
			
       ],
       'update'  => [
            'name' => 'string', 
			
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * AuthActionController constructor.
     */
    public function __construct()
    {
        parent::__construct(new AuthAction(), AuthActionTransformer::class);
    }

}