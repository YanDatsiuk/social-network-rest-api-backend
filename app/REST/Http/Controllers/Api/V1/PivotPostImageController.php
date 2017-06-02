<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\PivotPostImage;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;
use App\REST\Transformers\PivotPostImageTransformer;

class PivotPostImageController extends ControllerAbstract
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
            'image_id' => 'integer|between:0,4294967295|exists:images,id|unique_with:pivot_post_image,post_id', 
			'post_id' => 'integer|between:0,4294967295|exists:posts,id|unique_with:pivot_post_image,image_id', 
			
       ],
       'update'  => [
            'image_id' => 'integer|between:0,4294967295|exists:images,id|unique_with:pivot_post_image,post_id', 
			'post_id' => 'integer|between:0,4294967295|exists:posts,id|unique_with:pivot_post_image,image_id', 
			
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * PivotPostImageController constructor.
     */
    public function __construct()
    {
        parent::__construct(new PivotPostImage(), PivotPostImageTransformer::class);
    }

}