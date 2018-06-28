<?php


/**
 * Created by Beyond Plus <bplusmyanmar@hotmail.com>
 * User: Beyond Plus
 * Date: D/M/Y
 * Time: MM:HH PM
 */


// Route::any('/password/reset','Front\FrontController@index');



Route::group(['middleware' => 'web'], function () {
      Route::auth();
      // Route::any('/login','Front\FrontController@index');
      // Route::any('/register','Front\FrontController@index');
      // Route::any('/password/reset', 'Front\FrontController@index');
      Route::post('bp-admin/login','BpAdmin\Main@loginAdmin');
      Route::get('bp-admin/login', 'BpAdmin\Main@login');

      Route::get('logout','Auth\MainController@logout');


      Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

      Route::group(['prefix' => 'bp-admin','namespace'  =>  'BpAdmin', 'middleware' => 'admins'], function () {

      Route::get('/', 'AdminController@index');
      Route::get('logout','Main@logout');

      Route::resource('post', 'PostController');
      Route::get('post/{id}/translate', 'PostController@translate');
      Route::get('post/delete/{id}','PostController@destroy');


      Route::resource('page', 'PageController');
      Route::get('page/{id}/translate', 'PageController@translate');
      Route::get('page/delete/{id}','PageController@destroy');

      Route::resource('user', 'UserController');
      Route::get('user/delete/{id}', 'UserController@destroy');

      Route::resource('media', 'MediaController');
      Route::get('media/delete/{id}','MediaController@destroy');

      Route::resource('slider', 'SliderController');
      Route::get('slider/delete/{id}','SliderController@destroy');

      Route::resource('menu', 'MenuController');

      Route::get('permission','PermissionController@index');
      Route::post('permission', 'PermissionController@ajaxUpdate');

      Route::get('menu/delete/{id}','MenuController@destroy');
      Route::post('menu/pagestore', 'MenuController@pageStore');
      Route::post('menu/poststore', 'MenuController@postStore');
      Route::get('menu/{id}/translate', 'MenuController@translate');

      Route::resource('category', 'CategoryController');
      Route::get('category/delete/{id}','CategoryController@destroy');
      Route::get('category/{id}/translate', 'CategoryController@translate');

      Route::get('tax', 'TaxController@index');
      Route::get('tax/add', 'TaxController@create');
      Route::post('tax/add', 'TaxController@store');
      Route::get('tax/{id}', 'TaxController@edit');
      Route::put('tax/{id}','TaxController@update');
      Route::get('tax/delete/{id}','TaxController@destroy');
      Route::get('tax/{id}/translate', 'TaxController@translate');

      Route::get('general','SettingsController@index');
      Route::get('general/add', 'SettingsController@generaledit');
      Route::post('general/add', 'SettingsController@generaledit');


      Route::resource('account', 'AccountController');
      Route::get('account/delete/{id}', 'AccountController@destroy');
      Route::resource('custom', 'CustomController');

      });
      
      Route::get('/', 'Front\FrontController@index');
      Route::get('/sitemap', 'Front\FrontController@sitemap');
      Route::get('/rss', 'Front\FrontController@rss');
      
      Route::get('/{name}', 'Front\FrontController@menu');
      Route::get('/detail/{name}', 'Front\FrontController@post');
      Route::get('/cat/{name}', 'Front\FrontController@cat');


      Route::get('/test', function(){
         return abort(404);
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

  });