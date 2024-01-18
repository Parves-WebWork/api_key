<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($result,$message){

        $respones =[

            'success' => true,
            'data' => $result,
            'message' => $message,
        ];

        return response()->json($respones,200);
    }


    public  function sendError($error,$errorMessages = [],$code= 404)
    {
        $respones = [
            'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)){

            $response['data'] = $errorMessages;
        }

        return response()->json($respones,$code);
    }
}
