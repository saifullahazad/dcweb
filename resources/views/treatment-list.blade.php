@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="well well-sm text-center text-success">Treatment List</div>
                <div class="panel-body">
                    <div class="col-lg-2">
                        <div class="panel panel-danger text-center">
                            <div class="panel-heading">Patient Name</div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="panel panel-danger text-justify">
                            <div class="panel-heading">Current Diseases</div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="panel panel-danger text-center">
                            <div class="panel-heading">Symptom</div>
                        </div>
                    </div>
                   
                    <div class="col-lg-2">
                        <div class="panel panel-danger text-center">
                            <div class="panel-heading">Details</div>
                        </div>
                    </div>
                    
                    @foreach ($treatment as $trt)
                    <div class="col-lg-2" style="background-color: #ccccff; margin-bottom: 4px;">
                        <div class="text-center text-justify">
                            <div class="panel-heading">{{$trt->patientName}}</div>
                        </div>
                    </div>
                    <div class="col-lg-3" style="background-color: #ccccff; margin-bottom: 4px;">
                        <div class="text-justify">
                            <div class="panel-heading">{{$trt->currentDiseases}}</div>
                        </div>
                    </div>
                    
                    <div class="col-lg-5" style="background-color: #ccccff; margin-bottom: 4px;">
                        <div class="text-justify">
                            <div class="panel-heading">{{$trt->symptom}}</div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="text-center"  style="background-color: #ccccff; margin-bottom: 4px;">
                            <div class="panel-heading"><a <a href="{{url('/')}}/treatment/details/{{$trt->treatmentId}}" class="btn btn-small btn-success " style="padding: 0px;">Details</a></div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
