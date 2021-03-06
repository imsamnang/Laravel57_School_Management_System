<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class LanguageController extends Controller
{
  //
  public function index()
  {
      if (!\Session::has('locale')) {
          \Session::put('locale', Input::get('locale'));
      } else {
          \Session::put('locale', Input::get('locale'));
      }
      return redirect()->back();
  }

  public function change($lang)
  {
      \Session::put('locale', $lang);
      // return redirect()->route('home');
      return redirect()->back();
  }


}