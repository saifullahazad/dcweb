<?php

namespace App\Http\Controllers;

use App\Model\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try {


            $this->validate($request, [
                "fullName" => "required|min:2|max:150",
                "email" => "required|unique:userInfo|min:2|max:150",
                "contactNo" => "required|min:2|max:20",
                "gender" => "required",
                "specialistOn" => "required",
            ]);

            Career::create($request->all());

            $careerInfo = Career::all()
                ->where('email', $request->input('email'))
                ->first();

            return response()->json($careerInfo);

        }catch (Exception $e){
            $returnData = array(
                'status' => 'error',
                'message' => $e->getMessage()
            );
            return Response::json($returnData, 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        try{
            $careerId = $request->input('careerId');
            $career = Career::findOrFail($careerId);

            if($career==null) throw new Exception('This request not found',6);

            $career->update($request->all());

            return response()->json($career);
        }catch (Exception $e){
            $returnData = array(
                'status' => 'error',
                'message' => $e->getMessage()
            );
            return Response::json($returnData, 500);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        //
    }
}
