<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;
use Validator;

class CaptchaController extends Controller
{

    public function getIndex(){
    	return View::make('captcha');
    }

    public function postIndex(Request $request){
    	$rules = [
    		'g-recaptcha-response' => 'required|captcha',
    	];
    	$messages = [
		    'g-recaptcha-response.required' => '尚未進行驗證',
		    'g-recaptcha-response.captcha'  => '驗證失敗',
		];
    	$validator = Validator::make($request->all(), $rules, $messages);
    	if($validator->fails()){
    		return View::make('captcha')->withErrors($validator->messages());
    	}else{
    		return View::make('captcha')->with(['msg'=>'驗證成功']);
    	}
    }
}
