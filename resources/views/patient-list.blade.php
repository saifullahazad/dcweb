@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="well well-sm text-center text-success">Patient List</div>
                <div class="panel-body">
                    <div class="col-lg-3">
                        <div class="panel panel-danger text-center">
                            <div class="panel-heading">Patient Name</div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="panel panel-danger text-center">
                            <div class="panel-heading">Contact</div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="panel panel-danger text-center">
                            <div class="panel-heading">Address</div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="panel panel-danger text-center">
                            <div class="panel-heading">Details</div>
                        </div>
                    </div>
                    
                    @foreach ($patient as $patient)
                    <div class="col-lg-3" style="background-color: #ccccff; margin-bottom: 4px;">
                        <div class="text-justify">
                            <div class="panel-heading">{{$patient->fullName}}</div>
                        </div>
                    </div>
                    <div class="col-lg-2" style="background-color: #ccccff; margin-bottom: 4px;">
                        <div class="text-justify">
                            <div class="panel-heading">{{$patient->contactNo}}</div>
                        </div>
                    </div>
                    <div class="col-lg-5" style="background-color: #ccccff; margin-bottom: 4px;">
                        <div class="text-justify">
                            <div class="panel-heading">{{$patient->address}}</div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="text-center" style="background-color: #ccccff; margin-bottom: 4px;">
                            <div class="panel-heading"><a href="{{url('/')}}/patient/details/{{$patient->userId}}" class="btn btn-sm btn-success  " style="padding: 0px;">Details</a></div>
                        </div>
                    </div>
                    @endforeach

                </div>


            </div>
        </div>
    </div>
</div>

@endsection
