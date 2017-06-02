<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\PivotUserGroup;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\PivotUserGroupTransformer;

class PivotUserGroupController extends ControllerAbstract
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
            'group_id' => 'integer|between:0,4294967295|exists:groups,id', 
			'member_id' => 'integer|between:0,4294967295|exists:users,id', 
			
       ],
       'update'  => [
            'group_id' => 'integer|between:0,4294967295|exists:groups,id', 
			'member_id' => 'integer|between:0,4294967295|exists:users,id', 
			
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * PivotUserGroupController constructor.
     */
    public function __construct()
    {
        parent::__construct(new PivotUserGroup(), PivotUserGroupTransformer::class);
    }

}