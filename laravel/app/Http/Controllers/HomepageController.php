<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
      return view('frontpage.index');
    }

    public function blog()
    {
     return view('frontpage.blog');
    }

}
