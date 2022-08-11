<?php

namespace App\Http\Controllers;

use App\Models\Dao;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use PDO;
use Illuminate\Support\Str;

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

        $validated =  $request->validate([
            "name" => ['required', 'min:2'],
            "symbol" => ['required', 'min:2'],
            "vote_mode" => ['required'],
            "document" => ['required'],
            "worth" => ['nullable', 'numeric'],
        ]);


        $extras = [];
        foreach ($request->extra_key as $index => $extra_key) {

            $insert = [
                "id" => $index,
                "key" => $request->extra_key[$index],
                "value" => $request->extra_value[$index],
                "pv" => $request->extra_pv[$index]
            ];
            array_push($extras, $insert);
            // $extras[$request->extra_key[$index]] = [$request->extra_value[$index],  $request->extra_pv[$index]];
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
            "parent_id" =>  $request->parent_id ?? null,
            "is_subset" =>  $request->is_subset ?? null,
            "reform_number" => ($request->reform_number + 1) ?? 0,
        ]);


        foreach ($request->partner_email as  $index => $partner_type) {

            if ($request->partner_email[$index] != null) {
                DB::table('dao_user')->insert([
                    'user_id' => User::where('email', $request->partner_email[$index])->first()->id,
                    'dao_id' => $dao->id,
                    'partner_email' => $request->partner_email[$index],
                    'partner_type' => $request->partner_type[$index],
                    'partner_share' => $request->partner_share[$index] ?? 0,
                ]);
            }
        }

        $UserController = new UserController;

        $request = new \Illuminate\Http\Request();
        $request->replace(['dao_id' => $dao->id]);

        $UserController->accept_join_dao($request);


        return redirect()->route('show_dao', ['dao_id' => $dao->id])->with('msg', 'Dao Generated successfully');
    }
    public function reform_dao(Request $request)
    {
        $dao = Dao::where('id', $request->dao_id)->first();
        return view('dao.reform', compact('dao'));
    }

    public function change_dao_minted_status(Request $request)
    {
        Dao::where('token', $request->dao_token)->update([
            'is_minted' => '1'
        ]);
        return true;
    }
}
