<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\Wall;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\WallTransformer;

class WallController extends ControllerAbstract
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
            
       ],
       'update'  => [
            
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * WallController constructor.
     */
    public function __construct()
    {
        parent::__construct(new Wall(), WallTransformer::class);
    }

}