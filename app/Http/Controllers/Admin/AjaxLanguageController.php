<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxLanguageController extends Controller
{
  public function changeLanguage(Request $request)
  {
  	if($request->ajax()){
  		$request->session()->put('locale',$request->locale);
  		$request->session()->flash('alert-success',('app.locale_change_success'));
  	}
  }
}
