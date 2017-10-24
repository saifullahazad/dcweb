<?php

namespace App\Http\Controllers;

use App\Model\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    //



    public function GetContentDetail(Request $request){
        try {
            if(!$request->has('contentCode')) throw new Exception('Content Code is required',6);
            $contentCode = $request->input('contentCode');

            $content = Content::all()
                ->where('contentCode', $contentCode)
                ->first();



            return response()->json($content);


        }catch (Exception $e){
            $returnData = array(
                'status' => 'error',
                'message' => $e->getMessage()
            );
            return Response::json($returnData, 400);
        }
    }


}
