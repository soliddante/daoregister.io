<?php

namespace App\Http\Controllers;

use App\Models\Daoipfs;
use App\Http\Requests\StoreDaoipfsRequest;
use App\Http\Requests\UpdateDaoipfsRequest;
use App\Models\Dao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DaoipfsController extends Controller
{
    public function dao_ipfs_create(Request $request)
    {

        foreach ($request->ipfs_images_data_array as $image_and_id_object) {
            $image_and_id_object = json_decode($image_and_id_object);
            $random = Str::random(40);
            $encodedData = explode(',', $image_and_id_object->image);
            $encodedData = $encodedData[1];
            $decodedData = base64_decode($encodedData);
            $safeNamePic = $random . '.' . 'png';
            $safeNamejson = $random . '.' . 'json';
            $path =  public_path() . '/storage/dao_nft/' . $safeNamePic;
            $path_url =  url('') . '/storage/dao_nft/' . $safeNamePic;
            $path_url_json =  url('') . '/storage/dao_nft/' . $safeNamejson;
            file_put_contents($path, $decodedData);
            $dao_to_save = Dao::where('id', $image_and_id_object->dao_id)->first();

            $daoipfs = Daoipfs::create([
                "json" => $path_url_json,
                "image" => $path_url,
                "token" => $dao_to_save->token,
                'name' => $dao_to_save->name,
                'symbol' => $dao_to_save->symbol,
                'type' => $dao_to_save->type,
                'token' => $dao_to_save->token,
                'worth' => $dao_to_save->worth,
                'vote_mode' => $dao_to_save->vote_mode,
                'document' => $dao_to_save->document,
                'lazy' => $dao_to_save->lazy,
                'parent_id' => $dao_to_save->parent_id,
                'is_subset' => $dao_to_save->is_subset,
                'is_minted' => $dao_to_save->is_minted,
                'published' => $dao_to_save->published,
                'parent' => $dao_to_save->parent,
                'extras' => $dao_to_save->extras,
                'picture' => $dao_to_save->picture,
                'reform_number' => $dao_to_save->reform_number,
            ]);

            $json_dao_ipfs =  ([
                "name" => 'Document: ' . $dao_to_save->token,
                "description" => "Generated by DaoRegister.io",
                "image" => $path_url,
                "attributes" => [
                    [
                        "trait_type" => "token",
                        "value" => $dao_to_save->token
                    ],
                    [
                        "trait_type" => "name",
                        "value" => $dao_to_save->name
                    ],
                    [
                        "trait_type" => "symbol",
                        "value" => $dao_to_save->symbol
                    ],
                    [
                        "trait_type" => "type",
                        "value" => $dao_to_save->type
                    ],
                    [
                        "trait_type" => "token",
                        "value" => $dao_to_save->token
                    ],
                    [
                        "trait_type" => "worth",
                        "value" => $dao_to_save->worth,
                    ],
                    [
                        "trait_type" => "vote_mode",
                        "value" => $dao_to_save->vote_mode,
                    ],
                    [
                        "trait_type" => "document",
                        "value" => $dao_to_save->document,
                    ],

                    [
                        "trait_type" => "parent_id",
                        "value" => $dao_to_save->parent_id,
                    ],
                    [
                        "trait_type" => "is_subset",
                        "value" => $dao_to_save->is_subset,
                    ],

                    [
                        "trait_type" => "published",
                        "value" => $dao_to_save->published,
                    ],
                    [
                        "trait_type" => "reform_number",
                        "value" => $dao_to_save->reform_number,
                    ],

                ]
            ]);
            Storage::disk('public_uploads')->put("dao_nft/" . $safeNamejson, json_encode($json_dao_ipfs));
        }
        return redirect()->back()->with('msg', 'Documents minted successfully');
    }
}
