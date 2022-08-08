<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $request)
    {
        $sabbir_secret_key = 12345;
        $user_keys = $request->amar_key;

        $data = [

                'name'=>'sabbir',
                'dezignation'=>'Web Developer',
                'mobile'=>'0000',
                'acn'=>'sabbiraccount',

        ];

        if($sabbir_secret_key == $user_keys){
            return response()->json([
                'user_info' =>$data,
            ]);
        }else{
            return response([
                'Message' => 'Provide valid usr key',
            ]);
        }
    }
}
