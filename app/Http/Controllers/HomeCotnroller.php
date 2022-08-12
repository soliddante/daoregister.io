<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCotnroller extends Controller
{
    public function start()
    {
        return view('dao.discover');
    }
    public function contact()
    {
        return view('home/contact');
    }
    public function terms()
    {
        return view('home/terms');
    }
}
