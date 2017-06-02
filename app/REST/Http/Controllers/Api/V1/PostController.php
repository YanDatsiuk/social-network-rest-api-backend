<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\Post;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\PostTransformer;

class PostController extends ControllerAbstract
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
            'author_id' => 'integer|between:0,4294967295', 
			'text' => 'string', 
			
       ],
       'update'  => [
            'author_id' => 'integer|between:0,4294967295', 
			'text' => 'string', 
			
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * PostController constructor.
     */
    public function __construct()
    {
        parent::__construct(new Post(), PostTransformer::class);
    }

}