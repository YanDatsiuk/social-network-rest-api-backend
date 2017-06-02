<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\Comment;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\CommentTransformer;

class CommentController extends ControllerAbstract
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
            'author_id' => 'integer|between:0,4294967295|exists:users,id', 
			'text' => 'string', 
			
       ],
       'update'  => [
            'author_id' => 'integer|between:0,4294967295|exists:users,id', 
			'text' => 'string', 
			
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * CommentController constructor.
     */
    public function __construct()
    {
        parent::__construct(new Comment(), CommentTransformer::class);
    }

}