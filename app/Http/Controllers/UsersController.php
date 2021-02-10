<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function list()
    {
        $user=User::all();
        return $this->responseWithSuccess($user,'success','200');
    }

    public function create(Request $request)
    {
//        dd($request->all());
        try {
            $user=User::create([
                'name'=>$request->name,
                'mobile'=>$request->mobile
            ]);

            return $this->responseWithSuccess($user,'user create success','200');
        }catch (\Exception $e)
        {
            return $this->responseWithError('',$e->getMessage(),'500');
        }

    }
}
