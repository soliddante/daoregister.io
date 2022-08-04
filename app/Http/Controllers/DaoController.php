<?php

namespace App\Http\Controllers;

use App\Models\Dao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaoController extends Controller
{
    public function discover_dao()
    {
        return view('dao.discover');
    }

    public function show_dao(Request $request)
    {
        $dao = Dao::find($request->dao_id);
        return view('dao.show',compact('dao'));
    }

    public function create_dao()
    {
        return view('dao.create');
    }
    public function store_dao(Request $request)
    {
        // "extra_key" => $request->extra_key,
        // "extra_value" => $request->extra_value,
        // "partner_type" => $request->partner_type,
        // "partner_account" => $request->partner_account,
        // "partner_share" => $request->partner_share,

        $validated =  $request->validate([
            "name" => ['required'],
            "symbol" => ['required'],
            "type" => ['required'],
            "vote_mode" => ['required'],
            "document" => ['required'],
            "worth" => ['required'],
        ]);

        $dao = Dao::create([
            "name" => $request->name,
            "symbol" => $request->symbol,
            "type" => $request->type,
            "token" => $request->token,
            "vote_mode" => $request->vote_mode,
            "document" => $request->document,
            "lazy" => $request->lazy ?? '1',
            "worth" => $request->worth ?? '-',
        ]);

        for ($i = 0; $i == count($request->partner_email); $i++) {
            DB::table('dao_user')->insert([
                //FIXME  user id should sign uped
                'user_id' => 1,
                'dao_id' => $dao->id,
                'partner_email' => $request->partner_email[$i],
                'partner_type' => $request->partner_type[$i],
                'partner_share' => $request->partner_share[$i],
            ]);
        }
        return redirect()->back()->with('msg', 'Dao Generated successfully');
    }
}
