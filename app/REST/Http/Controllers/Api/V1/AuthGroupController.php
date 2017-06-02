<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\AuthGroup;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\AuthGroupTransformer;

class AuthGroupController extends ControllerAbstract
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
     * AuthGroupController constructor.
     */
    public function __construct()
    {
        parent::__construct(new AuthGroup(), AuthGroupTransformer::class);
    }

}