<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
	return view('welcome');
});


Route::get('hello', function(){
	if(Request::has('lang')){
		App::setLocale(Request::get('lang'));
	}
	return view('hello');
});


Route::controller('mail','MailController');

Route::controller('carbon','CarbonController');

Route::controller('captcha','CaptchaController');

Route::auth();
Route::get('/home', 'HomeController@index');
Route::group(['prefix'=>'login/social','middleware'=>['guest']],function(){
	Route::get('{provider}/redirect',[
		'as' => 'social.redirect',
		'uses' => 'Auth\SocialController@getSocialRedirect'
	]);
	Route::get('{provider}/callback',[
		'as' => 'social.handle',
		'uses' => 'Auth\SocialController@getSocialCallback'
	]);
});
