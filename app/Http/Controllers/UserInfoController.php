<?php

namespace App\Http\Controllers;

use App\Model\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\CountValidator\Exception;

class UserInfoController extends Controller
{


    public function Login(Request $request){
        try {
            $user = new UserInfo();
            if(!$request->has('userEmail')) throw new Exception('Email is required',6);
            if(!$request->has('userPass')) throw new Exception('Password is required',6);
            if(!$request->has('userType')) throw new Exception('Type is required',6);

            $user->userEmail=$request->input('userEmail');
            $user->userPass=$request->input('userPass');
            $user->userType=$request->input('userType');

            $userInfo = UserInfo::all()
                ->where('userEmail', $user->userEmail)
                ->where('userPass', $user->userPass)
                ->where('userType', $user->userType)
                ->first();

            if($userInfo==null) throw new Exception('User Email, Password & Type not valid',6);

            return response()->json($userInfo);
        }catch (\Exception $e){
            $error=Error::getErrorAsObject($e);
            return response()->json($error);
        }
    }

    public function logout(Request $request){
        try {

            $user = new UserInfo();

            if(!$request->has('userEmail')) throw new Exception('Email is required',6);

            $user->userEmail=$request->input('userEmail');

            $userInfo = UserInfo::all()
                ->where('userEmail', $user->userEmail)
                ->first();

            if($userInfo==null) throw new Exception('User not valid',6);

            return response()->json($userInfo);
        }catch (\Exception $e){
            $error=Error::getErrorAsObject($e);
            return response()->json($error);
        }

    }

    public function register(Request $request){
        try {


            UserInfo::create($request->all());
            $userInfo = UserInfo::all()
                ->where('userEmail', $request->input('userEmail'))
                ->first();

            return response()->json($userInfo);

        }catch (\Exception $e){
            $error=Error::getErrorAsObject($e);
            return response()->json($error);
        }

    }

    public function registration() {

        $userInfo = DB::table("userInfo")->get();
        return view("/registration")->with('userInfo', $userInfo);
    }

    public function create(Request $request) {



        $this->validate($request, [
            "name" => "required|min:2|max:100",
            "userEmail" => "required|unique:userInfo|min:2|max:100",
            "userPass" => "required|min:2|max:100",
            "contactNo" => "required|min:2|max:16",
            "userGender" => "required",
            "birthday" => "required",
            "holdingType" => "required",
            "address" => "required",
            "userType" => "required",
        ]);



        $data = array(
            "fullName" => $request->name,
            "userEmail" => $request->userEmail,
            "userPass" => $request->userPass,
            "contactNo" => $request->contactNo,
            "userGender" => $request->userGender,
            "birthday" => $request->birthday,
            "holdingType" => $request->holdingType,
            "address" => $request->address,
            "birthday" => $request->birthday,
            "latitude" => $request->latitude,
            "longitude" => $request->longitude,
            "userPhoto" => $request->userPhoto,
            "nid" => $request->nid,
        );
        UserInfo::create($data);
        return redirect("/registration")->with("msg", "Save Successful");
    }

}
