<?php


//custom route
Route::group(['middleware' => 'web'], function () {
      Route::get('/service', 'BpAdmin\TemplateController@service');
});


Route::group(['prefix' => 'bp-admin','namespace'  =>  'BpAdmin', 'middleware' => 'admins'], function () {
		Route::get('custom/test', 'TestController@custom');
	});






// Route::group(['prefix' => 'api/v1','namespace'  => 'Api\Ver1', 'middleware' => 'auth:api'], function () {
//     Route::resource('posts', 'Posts');
// });