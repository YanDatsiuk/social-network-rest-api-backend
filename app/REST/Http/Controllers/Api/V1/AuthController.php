<?php

namespace App\REST\Http\Controllers\Api\v1;

use App\REST\User;
use Dingo\Api\Routing\Helpers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as IlluminateController;
use TMPHP\RestApiGenerators\Helpers\Traits\ErrorFormatable;
use TMPHP\RestApiGenerators\Helpers\Traits\Auth\Authenticatable;

/**
 * Class AuthController
 */
class AuthController extends IlluminateController
{
    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests,
        Authenticatable;

    /**
     * AuthController constructor.
     * @param IlluminateModel $userModel
     */
    public function __construct()
    {
        //setting model, as a DI for using in auth traits
        $this->userModel = new User();
    }

}