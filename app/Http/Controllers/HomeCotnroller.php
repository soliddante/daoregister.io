<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCotnroller extends Controller
{
    public function start()
    {
        return view('dao.discover');
    }
}
