<?php

namespace App\Http\Controllers;

use App\Model\Treatment;
use App\Model\UserInfo;
use Illuminate\Http\Request;
use Mockery\CountValidator\Exception;

class TreatmentController extends Controller
{
    public function RequestNow(Request $request){

        try {
            Treatment::create($request->all());
            $treatment = Treatment::all()
                ->where('patientEmail', $request->input('patientEmail'))
                ->where('requestDate', $request->input('requestDate'))
                ->where('requestTime', $request->input('requestTime'))
                ->first();

            return response()->json($treatment);

        }catch (Exception $e){
            $returnData = array(
                'status' => 'error',
                'message' => $e->getMessage()
            );
            return Response::json($returnData, 500);
        }
    }

    public function MyClosedRequests(Request $request){
        try {
            if(!$request->has('userEmail')) throw new Exception('Email is required',6);
            $userEmail = $request->input('userEmail');

            $userInfo = UserInfo::all()
                ->where('userEmail', $userEmail)
                ->first();

            if($userInfo==null) throw new Exception('User Email, Password & Type not valid',6);

            if($userInfo->userType=="Patient") {
                $myRequests = Treatment::all()
                    ->where('patientEmail', $userEmail)
                    ->where('requestStatus', 'Closed')
                    ->toArray();
            }else{
                $myRequests = Treatment::all()
                    ->where('doctorEmail', $userEmail)
                    ->where('requestStatus', 'Closed')
                    ->toArray();
            }
            return response()->json(array_values($myRequests));

        }catch (Exception $e){
            $returnData = array(
                'status' => 'error',
                'message' => $e->getMessage()
            );
            return Response::json($returnData, 500);
        }
    }

    public function MyPendingRequests(Request $request){
        try {
            if(!$request->has('userEmail')) throw new Exception('Email is required',6);
            $userEmail = $request->input('userEmail');

            $userInfo = UserInfo::all()
                ->where('userEmail', $userEmail)
                ->first();

            if($userInfo==null) throw new Exception('User Email, Password & Type not valid',6);

            if($userInfo->userType=="Patient") {
                $myRequests = Treatment::all()
                    ->where('patientEmail', $userEmail)
                    ->where('requestStatus', 'Pending')
                    ->toArray();
            }else{
                $myRequests = Treatment::all()
                    ->where('doctorEmail', $userEmail)
                    ->where('requestStatus', 'Pending')
                    ->where('chargeStatus', 'Confirmed')
                    ->where('treatmentStatus', 'Not Taken')
                    ->toArray();
            }

            return response()->json(array_values($myRequests));


        }catch (Exception $e){
            $returnData = array(
                'status' => 'error',
                'message' => $e->getMessage()
            );
            return Response::json($returnData, 400);
        }
    }

    public function Update(Request $request){
        try{
            $treatmentId = $request->input('treatmentId');
            $treatment = Treatment::findOrFail($treatmentId);

            if($treatment==null) throw new Exception('This request not found',6);

            $treatment->update($request->all());

            return response()->json($treatment);
        }catch (Exception $e){
            $returnData = array(
                'status' => 'error',
                'message' => $e->getMessage()
            );
            return Response::json($returnData, 500);
        }


    }
}
