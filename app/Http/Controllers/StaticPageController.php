<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{

    public function privacyPolicy() {
      return view('privacy-policy');
    }

    public function workWithUs() {
      return view('work-with-us');
    }

}
