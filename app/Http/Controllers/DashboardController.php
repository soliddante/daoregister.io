<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_personal()
    {
        return view('dashboard.personal');
    }
    public function dashboard_account()
    {
        return view('dashboard.account');
    }
}
