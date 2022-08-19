<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ResponseController extends Controller
{
    public function Success( $msg , $data,$status = Response::HTTP_OK){
        return response()->json([
            'status'=> $status ,
            'message'=> $msg,
            'data'=>$data
        ]);
    }

    public function Error(  $msg , $data,$status = Response::HTTP_FORBIDDEN){
        return response()->json([
            'status'=> $status,
            'message'=>$msg,
            'data'=>$data
        ]);
    }
}
