<?php

/**
 * Created by Beyond Plus <bplusmyanmar@hotmail.com>
 * User: Beyond Plus
 * Date: D/M/Y
 * Time: MM:HH PM
 */

//custom route
Route::group(['middleware' => 'web'], function () {
      Route::get('/service', 'BpAdmin\TemplateController@service');
});


Route::group(['prefix' => 'bp-admin','namespace'  =>  'BpAdmin', 'middleware' => 'admins'], function () {
		Route::get('custom/test', 'TestController@custom');
	});



Route::get('lang/{locale}', function ($locale) {
      if($locale == "mm"){
            Session::put('applocale', 'mm');
            App::setLocale($locale);
      } else {
            Session::put('applocale', 'en');
            App::setLocale("en");
      }    
      $locale = App::getLocale();
      return redirect()->back();
});


// Route::group(['prefix' => 'api/v1','namespace'  => 'Api\Ver1', 'middleware' => 'auth:api'], function () {
//     Route::resource('posts', 'Posts');
// });