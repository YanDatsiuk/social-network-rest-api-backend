<?php

namespace App\REST\Http\Controllers\Api\v1;

use Dingo\Api\Routing\Helpers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as IlluminateController;
use TMPHP\RestApiGenerators\Helpers\Traits\ErrorFormatable;
use TMPHP\RestApiGenerators\Helpers\Traits\Auth\RESTForgotPasswords;

/**
 * Class ForgotPasswordController.
 */
class ForgotPasswordController extends IlluminateController
{
    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests,
        RESTForgotPasswords;
}