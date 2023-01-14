<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
  /**
   * Index Site
   */
  public function index()
  {
      return view('site.index');
  }
}
