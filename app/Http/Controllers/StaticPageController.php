<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{

    public function privacyPolicy() {
      return view('static_pages.privacy-policy');
    }

    public function workWithUs() {
      return view('static_pages.work-with-us');
    }

}
