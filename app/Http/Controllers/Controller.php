<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function responseWithSuccess($data,$message,$code)
    {
        return response()->json([
            'message'=>$message,
            'data'=>$data,
            'code'=>$code
        ]);
    }

    public function responseWithError($data,$message,$code)
    {
        return response()->json([
            'message'=>$message,
            'data'=>$data,
            'code'=>$code
        ]);
    }
}
