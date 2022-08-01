<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function update_user_wallet(Request $request)
    {
        $user = User::where('id', auth()->user()->id);
        $user->update([
            'wallet' => $request->wallet
        ]);
        return true;
    }
}
