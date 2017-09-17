<?php

namespace App\Http\Controllers;

use App\Model\Treatment;
use App\Model\UserInfo;
use Illuminate\Http\Request;

use App\Http\Requests;

class BaseController extends Controller
{
    public function index()
    {
        return view('home');
    }


    public function doctorList()
    {
        $doctor = UserInfo::all()->where('userType', 'Doctor');
        return view('doctor-list')->with('doctor', $doctor);
    }
    public function doctorDetails($id)
    {
        $doctor =  UserInfo::all()->where('userId', (int)$id)->first();
        return view('doctor-view')->with('doctor', $doctor);
    }

    public function patientList()
    {
        $patient = UserInfo::all()->where('userType', 'Patient');
        return view('patient-list')->with('patient', $patient);
    }

    public function patientDetails($id)
    {
        $patient =  UserInfo::all()->where('userId', (int)$id)->first();
        //dd($patient);
        return view('patient-view')->with('patient', $patient);
    }


    public function treatment()
    {
        $treatment = Treatment::orderBy('requestDate', 'desc')->orderBy('requestTime', 'desc')->get();
        return view('treatment-list')->with('treatment', $treatment);
    }
    public function treatmentDetails($id)
    {
        $doctor = UserInfo::all()->where('userType', 'Doctor');
        $treatment = Treatment::all()->where('treatmentId', (int)$id);
        return view('treatment-view')->with('treatment', $treatment)->with('doctor', $doctor);
    }
    public function treatmentUpdate(Request $request)
    {
        try{
            $treatmentId = $request->input('treatmentId');
            $treatment = Treatment::findOrFail($treatmentId);

            if($treatment==null) throw new Exception('This request not found',6);

            $treatment->update($request->all());

            return redirect()->back()->with('message', 'Update Successful');
        }catch (Exception $e){
            $returnData = array(
                'status' => 'error',
                'message' => $e->getMessage()
            );
            return redirect()->back()->with('message', 'Something went wrong.');
        }
    }

}
