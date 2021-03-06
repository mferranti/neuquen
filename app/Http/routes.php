<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function ()
{
    Route::group(['prefix' => 'v1'], function ()
    {
        require config('infyom.laravel_generator.path.api_routes');
    });
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::resource("products", "ProductController");

    Route::get('products/delete/{id}', [
      'as' => 'products.delete',
      'uses' => 'ProductController@destroy',
    ]);

    Route::resource("modules", "ModuleController");

    Route::get('modules/delete/{id}', [
      'as' => 'modules.delete',
      'uses' => 'ModuleController@destroy',
    ]);

    Route::resource("clients", "ClientController");

    Route::get('clients/delete/{id}', [
      'as' => 'clients.delete',
      'uses' => 'ClientController@destroy',
    ]);
});

