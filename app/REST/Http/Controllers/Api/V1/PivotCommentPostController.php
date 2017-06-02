<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\PivotCommentPost;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\PivotCommentPostTransformer;

class PivotCommentPostController extends ControllerAbstract
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
            'comment_id' => 'integer|between:0,4294967295|exists:comments,id', 
			'post_id' => 'integer|between:0,4294967295|exists:posts,id', 
			
       ],
       'update'  => [
            'comment_id' => 'integer|between:0,4294967295|exists:comments,id', 
			'post_id' => 'integer|between:0,4294967295|exists:posts,id', 
			
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * PivotCommentPostController constructor.
     */
    public function __construct()
    {
        parent::__construct(new PivotCommentPost(), PivotCommentPostTransformer::class);
    }

}