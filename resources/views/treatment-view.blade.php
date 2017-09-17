@extends('layouts.app')

@section('content')
@if(session()->has('message'))
{!! session()->get('message') !!}
@endif

<div class="contanier">
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                @foreach ($treatment as $trt)

                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="well well-sm text-center text-success">Treatment Process</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="col-md-4">Patient Name</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->patientName}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Patient Email</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->patientEmail}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Patient Relative</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->patientRelation}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Gender</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->patientGender}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Patient Age</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->patientAge}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Current Diseases</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->currentDiseases}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Patient Symptom</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->symptom}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Patient Pre-Diseases</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->preDiseases}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Doctor Gender</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->doctorGender}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Ambulance</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->ambulance}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Patient Request Date</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->requestDate}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Patient Request Time</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->requestTime}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Doctor Charge</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->doctorCharge}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Ambulance Charge</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->ambulanceCharge}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Request Status</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->requestStatus}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Charge Status</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->chargeStatus}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Treatment Status </div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->treatmentStatus}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Payment Status </div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->paymentStatus}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Treatment Info </div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->treatmentInfo}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">User Command </div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->userCommand}}</div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-4">Doctor Email</div>
                                <div class="col-md-1">:</div>
                                <div class="col-md-7">{{$trt->doctorEmail}}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="well well-sm text-center text-success">Charge Refer to Patient</div>
                            <div class="panel-body">
                                <form action="{{url('/')}}/treatment-update" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="treatmentId" value="{{$trt->treatmentId}}">
                                    <div class="col-md-12">
                                        <div class="col-md-4">Doctor Charge</div>
                                        <div class="col-md-1">:</div>
                                        <div class="col-md-4"><input type="number" name="doctorCharge" value="{{$trt->doctorCharge}}"}}></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-4">Ambulance Charge</div>
                                        <div class="col-md-1">:</div>
                                        <div class="col-md-4"><input type="number" name="ambulanceCharge" value="{{$trt->ambulanceCharge}}"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4"><input type="submit" name="submit" value="Submit" class="btn btn-success"></div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="well well-sm text-center text-success">Patient Refer to Doctor </div>
                            <div class="panel-body">
                                <div class="col-lg-6">
                                    <div class="panel panel-danger text-center">
                                        <div class="panel-heading">Doctor Name</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="panel-danger text-center">
                                        <div class="panel-heading">Select</div>
                                    </div>
                                </div>
                                @foreach ($doctor as $doctor)
                                <form action="{{url('/')}}/treatment-update" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="treatmentId" value="{{$trt->treatmentId}}">
                                    <input type="hidden"  name="doctorEmail" value="{{$doctor->userEmail}}">

                                    <div class="col-md-12">
                                        <div class="col-lg-6" style="background-color: #ccccff; margin-bottom: 2px;">
                                            <div class="text-justify">
                                                <div style="margin-bottom: 3px;"><a href="{{url('/')}}/doctor/details/{{$doctor->userId}}" class="btn" style="padding: 0px;">{{$doctor->fullName}}</a></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6" style="background-color: #ccccff; margin-bottom: 2px;">
                                            <div class="text-justify">
                                                <div><input type='submit' value="{{($trt->doctorEmail == $doctor->userEmail)? 'Already Selected' : 'Select'}}"></div>
                                            </div>
                                        </div>
                                    </div>


                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection








