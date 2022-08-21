<?php

namespace App\Http\Controllers;

use App\Models\Accounting;
use App\Http\Requests\StoreAccountingRequest;
use App\Http\Requests\UpdateAccountingRequest;

class AccountingController extends Controller
{
    public function index()
    {
        return view('dao.accounting.index');
    }
}
