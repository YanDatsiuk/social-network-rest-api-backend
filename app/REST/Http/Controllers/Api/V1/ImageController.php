<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\Image;
use App\REST\Transformers\ImageTransformer;
use Dingo\Api\Http\Request;
use Illuminate\Support\Facades\Validator;
use TMPHP\RestApiGenerators\Support\ImageUploader;
use TMPHP\RestApiGenerators\AbstractEntities\ControllerAbstract;

class ImageController extends ControllerAbstract
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
            'image_src' => 'string', 
			
       ],
       'update'  => [
            'image_src' => 'string', 
			
       ],
       'show'    => [
            
       ],
       'destroy' => [
            
       ],
     ];

    /**
     * ImageController constructor.
     */
    public function __construct()
    {
        parent::__construct(new Image(), ImageTransformer::class);
    }

    public function upload(Request $request)
    {
        //get file from request
        $file = $request->file('image');

        //validate images extensions and size
        $validator = Validator::make((array)$file, ['image' => 'sometimes|image|mimes:jpeg,bmp,svg,png|size:51200']);
        if ($validator->fails()) {
            return $this->responseWithValidatorErrors($validator);
        }

        //upload image
        $image = ImageUploader::file($file);

        //response
        return $this->response->item($image, new ImageTransformer());

    }
}