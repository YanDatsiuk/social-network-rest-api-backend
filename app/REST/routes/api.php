<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');

$api->group(
    ['version' => 'v1', 'prefix' => 'v1', 'middleware' => ['check.role.access']],
    function ($api) {

        
        //auths-actions-groups CRUD
        $api->group(
            ['prefix' => '/auths-actions-groups'],
            function ($api) {

                /**
                 * @SWG\Get(
                 *     path="/auths-actions-groups",
                 *     tags={"auths-actions-groups"},
                 *     description="Get list of auths-actions-groups",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *      @SWG\Parameter(
                 *         name="include[]",
                 *         in="query",
                 *         description="List of model relations with limit and offset parameter. Example: {relationName}:limit({limit}|{offset})",
                 *         default="",
                 *         required=false,
                 *         type="array",
                 *         @SWG\Items(
                 *             type="string"
                 *         ),
                 *         collectionFormat="multi"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="page",
                 *         in="query",
                 *         description="Page number",
                 *         required=false,
                 *         default=1,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="limit",
                 *         in="query",
                 *         description="Items limit per page",
                 *         required=false,
                 *         default=10,
                 *         type="integer"
                 *     ),
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Requested resource collection"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/', 'App\REST\Http\Controllers\Api\v1\AuthActionGroupController@index')
                    ->name('auths-actions-groups');

                /**
                 * @SWG\Get(
                 *     path="/auths-actions-groups/show/{id}",
                 *     tags={"auths-actions-groups"},
                 *     description="Get specific auth-action-group by Id",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="auth-action-group with specified id"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/show/{id}', 'App\REST\Http\Controllers\Api\v1\AuthActionGroupController@show')
                    ->name('auths-actions-groups.show.id');

                /**
                 * @SWG\Post(
                 *     path="/auths-actions-groups/create",
                 *     tags={"auths-actions-groups"},
                 *     description="Create auth-action-group",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/auth-action-group",
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Created entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->post('/create/', 'App\REST\Http\Controllers\Api\v1\AuthActionGroupController@store')
                    ->name('auths-actions-groups.create');

                /**
                 * @SWG\Patch(
                 *     path="/auths-actions-groups/update/{id}",
                 *     tags={"auths-actions-groups"},
                 *     description="Update specific auth-action-group by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/auth-action-group"
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Updated entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->patch('/update/{id}', 'App\REST\Http\Controllers\Api\v1\AuthActionGroupController@update')
                    ->name('auths-actions-groups.update');

                /**
                 * @SWG\Delete(
                 *     path="/auths-actions-groups/delete/{id}",
                 *     tags={"auths-actions-groups"},
                 *     description="Delete specific auth-action-group by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="204",
                 *         description="Deleted entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->delete('/delete/{id}', 'App\REST\Http\Controllers\Api\v1\AuthActionGroupController@destroy')
                    ->name('auths-actions-groups.delete');
            }
        );

        //auths-actions CRUD
        $api->group(
            ['prefix' => '/auths-actions'],
            function ($api) {

                /**
                 * @SWG\Get(
                 *     path="/auths-actions",
                 *     tags={"auths-actions"},
                 *     description="Get list of auths-actions",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *      @SWG\Parameter(
                 *         name="include[]",
                 *         in="query",
                 *         description="List of model relations with limit and offset parameter. Example: {relationName}:limit({limit}|{offset})",
                 *         default="",
                 *         required=false,
                 *         type="array",
                 *         @SWG\Items(
                 *             type="string"
                 *         ),
                 *         collectionFormat="multi"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="page",
                 *         in="query",
                 *         description="Page number",
                 *         required=false,
                 *         default=1,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="limit",
                 *         in="query",
                 *         description="Items limit per page",
                 *         required=false,
                 *         default=10,
                 *         type="integer"
                 *     ),
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Requested resource collection"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/', 'App\REST\Http\Controllers\Api\v1\AuthActionController@index')
                    ->name('auths-actions');

                /**
                 * @SWG\Get(
                 *     path="/auths-actions/show/{id}",
                 *     tags={"auths-actions"},
                 *     description="Get specific auth-action by Id",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="auth-action with specified id"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/show/{id}', 'App\REST\Http\Controllers\Api\v1\AuthActionController@show')
                    ->name('auths-actions.show.id');

                /**
                 * @SWG\Post(
                 *     path="/auths-actions/create",
                 *     tags={"auths-actions"},
                 *     description="Create auth-action",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/auth-action",
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Created entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->post('/create/', 'App\REST\Http\Controllers\Api\v1\AuthActionController@store')
                    ->name('auths-actions.create');

                /**
                 * @SWG\Patch(
                 *     path="/auths-actions/update/{id}",
                 *     tags={"auths-actions"},
                 *     description="Update specific auth-action by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/auth-action"
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Updated entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->patch('/update/{id}', 'App\REST\Http\Controllers\Api\v1\AuthActionController@update')
                    ->name('auths-actions.update');

                /**
                 * @SWG\Delete(
                 *     path="/auths-actions/delete/{id}",
                 *     tags={"auths-actions"},
                 *     description="Delete specific auth-action by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="204",
                 *         description="Deleted entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->delete('/delete/{id}', 'App\REST\Http\Controllers\Api\v1\AuthActionController@destroy')
                    ->name('auths-actions.delete');
            }
        );

        //auths-groups-users CRUD
        $api->group(
            ['prefix' => '/auths-groups-users'],
            function ($api) {

                /**
                 * @SWG\Get(
                 *     path="/auths-groups-users",
                 *     tags={"auths-groups-users"},
                 *     description="Get list of auths-groups-users",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *      @SWG\Parameter(
                 *         name="include[]",
                 *         in="query",
                 *         description="List of model relations with limit and offset parameter. Example: {relationName}:limit({limit}|{offset})",
                 *         default="",
                 *         required=false,
                 *         type="array",
                 *         @SWG\Items(
                 *             type="string"
                 *         ),
                 *         collectionFormat="multi"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="page",
                 *         in="query",
                 *         description="Page number",
                 *         required=false,
                 *         default=1,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="limit",
                 *         in="query",
                 *         description="Items limit per page",
                 *         required=false,
                 *         default=10,
                 *         type="integer"
                 *     ),
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Requested resource collection"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/', 'App\REST\Http\Controllers\Api\v1\AuthGroupUserController@index')
                    ->name('auths-groups-users');

                /**
                 * @SWG\Get(
                 *     path="/auths-groups-users/show/{id}",
                 *     tags={"auths-groups-users"},
                 *     description="Get specific auth-group-user by Id",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="auth-group-user with specified id"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/show/{id}', 'App\REST\Http\Controllers\Api\v1\AuthGroupUserController@show')
                    ->name('auths-groups-users.show.id');

                /**
                 * @SWG\Post(
                 *     path="/auths-groups-users/create",
                 *     tags={"auths-groups-users"},
                 *     description="Create auth-group-user",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/auth-group-user",
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Created entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->post('/create/', 'App\REST\Http\Controllers\Api\v1\AuthGroupUserController@store')
                    ->name('auths-groups-users.create');

                /**
                 * @SWG\Patch(
                 *     path="/auths-groups-users/update/{id}",
                 *     tags={"auths-groups-users"},
                 *     description="Update specific auth-group-user by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/auth-group-user"
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Updated entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->patch('/update/{id}', 'App\REST\Http\Controllers\Api\v1\AuthGroupUserController@update')
                    ->name('auths-groups-users.update');

                /**
                 * @SWG\Delete(
                 *     path="/auths-groups-users/delete/{id}",
                 *     tags={"auths-groups-users"},
                 *     description="Delete specific auth-group-user by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="204",
                 *         description="Deleted entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->delete('/delete/{id}', 'App\REST\Http\Controllers\Api\v1\AuthGroupUserController@destroy')
                    ->name('auths-groups-users.delete');
            }
        );

        //auths-groups CRUD
        $api->group(
            ['prefix' => '/auths-groups'],
            function ($api) {

                /**
                 * @SWG\Get(
                 *     path="/auths-groups",
                 *     tags={"auths-groups"},
                 *     description="Get list of auths-groups",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *      @SWG\Parameter(
                 *         name="include[]",
                 *         in="query",
                 *         description="List of model relations with limit and offset parameter. Example: {relationName}:limit({limit}|{offset})",
                 *         default="",
                 *         required=false,
                 *         type="array",
                 *         @SWG\Items(
                 *             type="string"
                 *         ),
                 *         collectionFormat="multi"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="page",
                 *         in="query",
                 *         description="Page number",
                 *         required=false,
                 *         default=1,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="limit",
                 *         in="query",
                 *         description="Items limit per page",
                 *         required=false,
                 *         default=10,
                 *         type="integer"
                 *     ),
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Requested resource collection"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/', 'App\REST\Http\Controllers\Api\v1\AuthGroupController@index')
                    ->name('auths-groups');

                /**
                 * @SWG\Get(
                 *     path="/auths-groups/show/{id}",
                 *     tags={"auths-groups"},
                 *     description="Get specific auth-group by Id",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="auth-group with specified id"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/show/{id}', 'App\REST\Http\Controllers\Api\v1\AuthGroupController@show')
                    ->name('auths-groups.show.id');

                /**
                 * @SWG\Post(
                 *     path="/auths-groups/create",
                 *     tags={"auths-groups"},
                 *     description="Create auth-group",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/auth-group",
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Created entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->post('/create/', 'App\REST\Http\Controllers\Api\v1\AuthGroupController@store')
                    ->name('auths-groups.create');

                /**
                 * @SWG\Patch(
                 *     path="/auths-groups/update/{id}",
                 *     tags={"auths-groups"},
                 *     description="Update specific auth-group by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/auth-group"
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Updated entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->patch('/update/{id}', 'App\REST\Http\Controllers\Api\v1\AuthGroupController@update')
                    ->name('auths-groups.update');

                /**
                 * @SWG\Delete(
                 *     path="/auths-groups/delete/{id}",
                 *     tags={"auths-groups"},
                 *     description="Delete specific auth-group by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="204",
                 *         description="Deleted entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->delete('/delete/{id}', 'App\REST\Http\Controllers\Api\v1\AuthGroupController@destroy')
                    ->name('auths-groups.delete');
            }
        );

        //groups CRUD
        $api->group(
            ['prefix' => '/groups'],
            function ($api) {

                /**
                 * @SWG\Get(
                 *     path="/groups",
                 *     tags={"groups"},
                 *     description="Get list of groups",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *      @SWG\Parameter(
                 *         name="include[]",
                 *         in="query",
                 *         description="List of model relations with limit and offset parameter. Example: {relationName}:limit({limit}|{offset})",
                 *         default="",
                 *         required=false,
                 *         type="array",
                 *         @SWG\Items(
                 *             type="string"
                 *         ),
                 *         collectionFormat="multi"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="page",
                 *         in="query",
                 *         description="Page number",
                 *         required=false,
                 *         default=1,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="limit",
                 *         in="query",
                 *         description="Items limit per page",
                 *         required=false,
                 *         default=10,
                 *         type="integer"
                 *     ),
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Requested resource collection"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/', 'App\REST\Http\Controllers\Api\v1\GroupController@index')
                    ->name('groups');

                /**
                 * @SWG\Get(
                 *     path="/groups/show/{id}",
                 *     tags={"groups"},
                 *     description="Get specific group by Id",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="group with specified id"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/show/{id}', 'App\REST\Http\Controllers\Api\v1\GroupController@show')
                    ->name('groups.show.id');

                /**
                 * @SWG\Post(
                 *     path="/groups/create",
                 *     tags={"groups"},
                 *     description="Create group",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/group",
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Created entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->post('/create/', 'App\REST\Http\Controllers\Api\v1\GroupController@store')
                    ->name('groups.create');

                /**
                 * @SWG\Patch(
                 *     path="/groups/update/{id}",
                 *     tags={"groups"},
                 *     description="Update specific group by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/group"
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Updated entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->patch('/update/{id}', 'App\REST\Http\Controllers\Api\v1\GroupController@update')
                    ->name('groups.update');

                /**
                 * @SWG\Delete(
                 *     path="/groups/delete/{id}",
                 *     tags={"groups"},
                 *     description="Delete specific group by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="204",
                 *         description="Deleted entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->delete('/delete/{id}', 'App\REST\Http\Controllers\Api\v1\GroupController@destroy')
                    ->name('groups.delete');
            }
        );

        //pivots-posts-likes CRUD
        $api->group(
            ['prefix' => '/pivots-posts-likes'],
            function ($api) {

                /**
                 * @SWG\Get(
                 *     path="/pivots-posts-likes",
                 *     tags={"pivots-posts-likes"},
                 *     description="Get list of pivots-posts-likes",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *      @SWG\Parameter(
                 *         name="include[]",
                 *         in="query",
                 *         description="List of model relations with limit and offset parameter. Example: {relationName}:limit({limit}|{offset})",
                 *         default="",
                 *         required=false,
                 *         type="array",
                 *         @SWG\Items(
                 *             type="string"
                 *         ),
                 *         collectionFormat="multi"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="page",
                 *         in="query",
                 *         description="Page number",
                 *         required=false,
                 *         default=1,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="limit",
                 *         in="query",
                 *         description="Items limit per page",
                 *         required=false,
                 *         default=10,
                 *         type="integer"
                 *     ),
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Requested resource collection"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/', 'App\REST\Http\Controllers\Api\v1\PivotPostLikeController@index')
                    ->name('pivots-posts-likes');

                /**
                 * @SWG\Get(
                 *     path="/pivots-posts-likes/show/{id}",
                 *     tags={"pivots-posts-likes"},
                 *     description="Get specific pivot-post-like by Id",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="pivot-post-like with specified id"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/show/{id}', 'App\REST\Http\Controllers\Api\v1\PivotPostLikeController@show')
                    ->name('pivots-posts-likes.show.id');

                /**
                 * @SWG\Post(
                 *     path="/pivots-posts-likes/create",
                 *     tags={"pivots-posts-likes"},
                 *     description="Create pivot-post-like",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/pivot-post-like",
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Created entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->post('/create/', 'App\REST\Http\Controllers\Api\v1\PivotPostLikeController@store')
                    ->name('pivots-posts-likes.create');

                /**
                 * @SWG\Patch(
                 *     path="/pivots-posts-likes/update/{id}",
                 *     tags={"pivots-posts-likes"},
                 *     description="Update specific pivot-post-like by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/pivot-post-like"
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Updated entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->patch('/update/{id}', 'App\REST\Http\Controllers\Api\v1\PivotPostLikeController@update')
                    ->name('pivots-posts-likes.update');

                /**
                 * @SWG\Delete(
                 *     path="/pivots-posts-likes/delete/{id}",
                 *     tags={"pivots-posts-likes"},
                 *     description="Delete specific pivot-post-like by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="204",
                 *         description="Deleted entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->delete('/delete/{id}', 'App\REST\Http\Controllers\Api\v1\PivotPostLikeController@destroy')
                    ->name('pivots-posts-likes.delete');
            }
        );

        //pivots-posts-walls CRUD
        $api->group(
            ['prefix' => '/pivots-posts-walls'],
            function ($api) {

                /**
                 * @SWG\Get(
                 *     path="/pivots-posts-walls",
                 *     tags={"pivots-posts-walls"},
                 *     description="Get list of pivots-posts-walls",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *      @SWG\Parameter(
                 *         name="include[]",
                 *         in="query",
                 *         description="List of model relations with limit and offset parameter. Example: {relationName}:limit({limit}|{offset})",
                 *         default="",
                 *         required=false,
                 *         type="array",
                 *         @SWG\Items(
                 *             type="string"
                 *         ),
                 *         collectionFormat="multi"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="page",
                 *         in="query",
                 *         description="Page number",
                 *         required=false,
                 *         default=1,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="limit",
                 *         in="query",
                 *         description="Items limit per page",
                 *         required=false,
                 *         default=10,
                 *         type="integer"
                 *     ),
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Requested resource collection"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/', 'App\REST\Http\Controllers\Api\v1\PivotPostWallController@index')
                    ->name('pivots-posts-walls');

                /**
                 * @SWG\Get(
                 *     path="/pivots-posts-walls/show/{id}",
                 *     tags={"pivots-posts-walls"},
                 *     description="Get specific pivot-post-wall by Id",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="pivot-post-wall with specified id"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/show/{id}', 'App\REST\Http\Controllers\Api\v1\PivotPostWallController@show')
                    ->name('pivots-posts-walls.show.id');

                /**
                 * @SWG\Post(
                 *     path="/pivots-posts-walls/create",
                 *     tags={"pivots-posts-walls"},
                 *     description="Create pivot-post-wall",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/pivot-post-wall",
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Created entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->post('/create/', 'App\REST\Http\Controllers\Api\v1\PivotPostWallController@store')
                    ->name('pivots-posts-walls.create');

                /**
                 * @SWG\Patch(
                 *     path="/pivots-posts-walls/update/{id}",
                 *     tags={"pivots-posts-walls"},
                 *     description="Update specific pivot-post-wall by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/pivot-post-wall"
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Updated entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->patch('/update/{id}', 'App\REST\Http\Controllers\Api\v1\PivotPostWallController@update')
                    ->name('pivots-posts-walls.update');

                /**
                 * @SWG\Delete(
                 *     path="/pivots-posts-walls/delete/{id}",
                 *     tags={"pivots-posts-walls"},
                 *     description="Delete specific pivot-post-wall by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="204",
                 *         description="Deleted entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->delete('/delete/{id}', 'App\REST\Http\Controllers\Api\v1\PivotPostWallController@destroy')
                    ->name('pivots-posts-walls.delete');
            }
        );

        //pivots-users-groups CRUD
        $api->group(
            ['prefix' => '/pivots-users-groups'],
            function ($api) {

                /**
                 * @SWG\Get(
                 *     path="/pivots-users-groups",
                 *     tags={"pivots-users-groups"},
                 *     description="Get list of pivots-users-groups",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *      @SWG\Parameter(
                 *         name="include[]",
                 *         in="query",
                 *         description="List of model relations with limit and offset parameter. Example: {relationName}:limit({limit}|{offset})",
                 *         default="",
                 *         required=false,
                 *         type="array",
                 *         @SWG\Items(
                 *             type="string"
                 *         ),
                 *         collectionFormat="multi"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="page",
                 *         in="query",
                 *         description="Page number",
                 *         required=false,
                 *         default=1,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="limit",
                 *         in="query",
                 *         description="Items limit per page",
                 *         required=false,
                 *         default=10,
                 *         type="integer"
                 *     ),
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Requested resource collection"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/', 'App\REST\Http\Controllers\Api\v1\PivotUserGroupController@index')
                    ->name('pivots-users-groups');

                /**
                 * @SWG\Get(
                 *     path="/pivots-users-groups/show/{id}",
                 *     tags={"pivots-users-groups"},
                 *     description="Get specific pivot-user-group by Id",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="pivot-user-group with specified id"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/show/{id}', 'App\REST\Http\Controllers\Api\v1\PivotUserGroupController@show')
                    ->name('pivots-users-groups.show.id');

                /**
                 * @SWG\Post(
                 *     path="/pivots-users-groups/create",
                 *     tags={"pivots-users-groups"},
                 *     description="Create pivot-user-group",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/pivot-user-group",
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Created entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->post('/create/', 'App\REST\Http\Controllers\Api\v1\PivotUserGroupController@store')
                    ->name('pivots-users-groups.create');

                /**
                 * @SWG\Patch(
                 *     path="/pivots-users-groups/update/{id}",
                 *     tags={"pivots-users-groups"},
                 *     description="Update specific pivot-user-group by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/pivot-user-group"
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Updated entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->patch('/update/{id}', 'App\REST\Http\Controllers\Api\v1\PivotUserGroupController@update')
                    ->name('pivots-users-groups.update');

                /**
                 * @SWG\Delete(
                 *     path="/pivots-users-groups/delete/{id}",
                 *     tags={"pivots-users-groups"},
                 *     description="Delete specific pivot-user-group by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="204",
                 *         description="Deleted entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->delete('/delete/{id}', 'App\REST\Http\Controllers\Api\v1\PivotUserGroupController@destroy')
                    ->name('pivots-users-groups.delete');
            }
        );

        //posts CRUD
        $api->group(
            ['prefix' => '/posts'],
            function ($api) {

                /**
                 * @SWG\Get(
                 *     path="/posts",
                 *     tags={"posts"},
                 *     description="Get list of posts",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *      @SWG\Parameter(
                 *         name="include[]",
                 *         in="query",
                 *         description="List of model relations with limit and offset parameter. Example: {relationName}:limit({limit}|{offset})",
                 *         default="",
                 *         required=false,
                 *         type="array",
                 *         @SWG\Items(
                 *             type="string"
                 *         ),
                 *         collectionFormat="multi"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="page",
                 *         in="query",
                 *         description="Page number",
                 *         required=false,
                 *         default=1,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="limit",
                 *         in="query",
                 *         description="Items limit per page",
                 *         required=false,
                 *         default=10,
                 *         type="integer"
                 *     ),
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Requested resource collection"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/', 'App\REST\Http\Controllers\Api\v1\PostController@index')
                    ->name('posts');

                /**
                 * @SWG\Get(
                 *     path="/posts/show/{id}",
                 *     tags={"posts"},
                 *     description="Get specific post by Id",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="post with specified id"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/show/{id}', 'App\REST\Http\Controllers\Api\v1\PostController@show')
                    ->name('posts.show.id');

                /**
                 * @SWG\Post(
                 *     path="/posts/create",
                 *     tags={"posts"},
                 *     description="Create post",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/post",
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Created entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->post('/create/', 'App\REST\Http\Controllers\Api\v1\PostController@store')
                    ->name('posts.create');

                /**
                 * @SWG\Patch(
                 *     path="/posts/update/{id}",
                 *     tags={"posts"},
                 *     description="Update specific post by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/post"
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Updated entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->patch('/update/{id}', 'App\REST\Http\Controllers\Api\v1\PostController@update')
                    ->name('posts.update');

                /**
                 * @SWG\Delete(
                 *     path="/posts/delete/{id}",
                 *     tags={"posts"},
                 *     description="Delete specific post by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="204",
                 *         description="Deleted entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->delete('/delete/{id}', 'App\REST\Http\Controllers\Api\v1\PostController@destroy')
                    ->name('posts.delete');
            }
        );

        //users CRUD
        $api->group(
            ['prefix' => '/users'],
            function ($api) {

                /**
                 * @SWG\Get(
                 *     path="/users",
                 *     tags={"users"},
                 *     description="Get list of users",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *      @SWG\Parameter(
                 *         name="include[]",
                 *         in="query",
                 *         description="List of model relations with limit and offset parameter. Example: {relationName}:limit({limit}|{offset})",
                 *         default="",
                 *         required=false,
                 *         type="array",
                 *         @SWG\Items(
                 *             type="string"
                 *         ),
                 *         collectionFormat="multi"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="page",
                 *         in="query",
                 *         description="Page number",
                 *         required=false,
                 *         default=1,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="limit",
                 *         in="query",
                 *         description="Items limit per page",
                 *         required=false,
                 *         default=10,
                 *         type="integer"
                 *     ),
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Requested resource collection"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/', 'App\REST\Http\Controllers\Api\v1\UserController@index')
                    ->name('users');

                /**
                 * @SWG\Get(
                 *     path="/users/show/{id}",
                 *     tags={"users"},
                 *     description="Get specific user by Id",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="user with specified id"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/show/{id}', 'App\REST\Http\Controllers\Api\v1\UserController@show')
                    ->name('users.show.id');

                /**
                 * @SWG\Post(
                 *     path="/users/create",
                 *     tags={"users"},
                 *     description="Create user",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/user",
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Created entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->post('/create/', 'App\REST\Http\Controllers\Api\v1\UserController@store')
                    ->name('users.create');

                /**
                 * @SWG\Patch(
                 *     path="/users/update/{id}",
                 *     tags={"users"},
                 *     description="Update specific user by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/user"
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Updated entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->patch('/update/{id}', 'App\REST\Http\Controllers\Api\v1\UserController@update')
                    ->name('users.update');

                /**
                 * @SWG\Delete(
                 *     path="/users/delete/{id}",
                 *     tags={"users"},
                 *     description="Delete specific user by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="204",
                 *         description="Deleted entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->delete('/delete/{id}', 'App\REST\Http\Controllers\Api\v1\UserController@destroy')
                    ->name('users.delete');
            }
        );

        //walls CRUD
        $api->group(
            ['prefix' => '/walls'],
            function ($api) {

                /**
                 * @SWG\Get(
                 *     path="/walls",
                 *     tags={"walls"},
                 *     description="Get list of walls",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *      @SWG\Parameter(
                 *         name="include[]",
                 *         in="query",
                 *         description="List of model relations with limit and offset parameter. Example: {relationName}:limit({limit}|{offset})",
                 *         default="",
                 *         required=false,
                 *         type="array",
                 *         @SWG\Items(
                 *             type="string"
                 *         ),
                 *         collectionFormat="multi"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="page",
                 *         in="query",
                 *         description="Page number",
                 *         required=false,
                 *         default=1,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="limit",
                 *         in="query",
                 *         description="Items limit per page",
                 *         required=false,
                 *         default=10,
                 *         type="integer"
                 *     ),
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Requested resource collection"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/', 'App\REST\Http\Controllers\Api\v1\WallController@index')
                    ->name('walls');

                /**
                 * @SWG\Get(
                 *     path="/walls/show/{id}",
                 *     tags={"walls"},
                 *     description="Get specific wall by Id",
                 *     produces= {"application/json"},
                 *
                 *      @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="wall with specified id"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->get('/show/{id}', 'App\REST\Http\Controllers\Api\v1\WallController@show')
                    ->name('walls.show.id');

                /**
                 * @SWG\Post(
                 *     path="/walls/create",
                 *     tags={"walls"},
                 *     description="Create wall",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/wall",
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Created entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->post('/create/', 'App\REST\Http\Controllers\Api\v1\WallController@store')
                    ->name('walls.create');

                /**
                 * @SWG\Patch(
                 *     path="/walls/update/{id}",
                 *     tags={"walls"},
                 *     description="Update specific wall by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="",
                 *         in="body",
                 *         description="",
                 *         required=true,
                 *         @SWG\Schema(
                 *             ref="#/definitions/wall"
                 *         )
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="200",
                 *         description="Updated entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->patch('/update/{id}', 'App\REST\Http\Controllers\Api\v1\WallController@update')
                    ->name('walls.update');

                /**
                 * @SWG\Delete(
                 *     path="/walls/delete/{id}",
                 *     tags={"walls"},
                 *     description="Delete specific wall by Id",
                 *     produces= {"application/json"},
                 *
                 *     @SWG\Parameter(
                 *         name="Authorization",
                 *         in="header",
                 *         description="JWTAuthToken example - Bearer {token}",
                 *         required=true,
                 *         type="string"
                 *     ),
                 *     @SWG\Parameter(
                 *         name="id",
                 *         in="path",
                 *         description="",
                 *         required=true,
                 *         type="integer"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="204",
                 *         description="Deleted entity"
                 *     ),
                 *
                 *     @SWG\Response(
                 *         response="403",
                 *         description="Access forbidden"
                 *     ),
                 *     @SWG\Response(
                 *         response="422",
                 *         description="Unprocessable entity"
                 *     ),
                 *     @SWG\Response(
                 *         response="default",
                 *         description="Unexpected error",
                 *         @SWG\Schema(
                 *             ref="#/definitions/error"
                 *         )
                 *     )
                 * )
                 */
                $api->delete('/delete/{id}', 'App\REST\Http\Controllers\Api\v1\WallController@destroy')
                    ->name('walls.delete');
            }
        );


    }
);