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
        return view('dao.show', compact('dao'));
    }

    public function create_dao()
    {
        return view('dao.create');
    }
    public function store_dao(Request $request)
    {


        // $validated =  $request->validate([
        //     "name" => ['required'],
        //     "symbol" => ['required'],
        //     "type" => ['required'],
        //     "vote_mode" => ['required'],
        //     "document" => ['required'],
        //     "worth" => ['required'],
        // ]);
        // dd($request->extra_pv);
        $extras = [];
        foreach ($request->extra_key as $index => $extra_key) {
            $extras[$request->extra_key[$index]] = [$request->extra_value[$index],  $request->extra_pv[$index]];
        }
        $dao = Dao::create([
            "name" => $request->name,
            "symbol" => $request->symbol,
            "type" => $request->type,
            "token" => $request->token,
            "vote_mode" => $request->vote_mode,
            "document" => $request->document,
            "lazy" => $request->lazy ?? '1',
            "extras" => json_encode($extras),
            "worth" => $request->worth ?? '-',
        ]);


        foreach ($request->partner_email as  $index => $partner_type) {
            DB::table('dao_user')->insert([
                'user_id' => 1,
                'dao_id' => $dao->id,
                'partner_email' => $request->partner_email[$index],
                'partner_type' => $request->partner_type[$index],
                'partner_share' => $request->partner_share[$index],
            ]);
        }


        return redirect()->back()->with('msg', 'Dao Generated successfully');
    }
}
