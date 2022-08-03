<?php

namespace App\Http\Controllers;

use App\Models\ipfs;
use App\Http\Requests\StoreipfsRequest;
use App\Http\Requests\UpdateipfsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IpfsController extends Controller
{
    public function ipfs_create(Request $request)
    {
        $random = Str::random(40);
        $encodedData = explode(',', $request->form_image);
        $encodedData = $encodedData[1];
        $decodedData = base64_decode($encodedData);
        $safeName = $random . '.' . 'png';
        $path =  public_path() . '/storage/img/account_nft/' . $safeName;
        file_put_contents($path, $decodedData);

        ipfs::create([

            "firstname"=>$request->firstname,
            "lastname"=>$request->lastname,
            "email"=>$request->email,
            "gendar"=>$request->gendar,
            "birthday"=>$request->birthday,
            "profession"=>$request->profession,
            "education"=>$request->education,
            "university"=>$request->university,
            "country"=>$request->country,
            "city"=>$request->city,
            "postalcode"=>$request->postalcode,
            "address"=>$request->address,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "language_first"=>$request->language_first,
            "language_second"=>$request->language_second,
            "instagram"=>$request->instagram,
            "facebook"=>$request->facebook,
            "twitter"=>$request->twitter,
            "linkedin"=>$request->linkedin,
            "whatsapp"=>$request->whatsapp,
            "telegram"=>$request->telegram,

        ]);
        


    }
}
