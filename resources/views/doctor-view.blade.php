@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="well well-sm text-center text-success">Doctor Details </div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-4 control-label text-justify">Full Name</label>
                            <div class="col-md-1">
                                <label class="col-md-1 control-label">:</label>                           
                            </div>
                            <div class="col-md-7">
                                <label class="col-md-4 form-control" style="border: hidden">{{$doctor->fullName}}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label text-justify">Doctor Email</label>
                            <div class="col-md-1">
                                <label class="col-md-1 control-label">:</label>                           
                            </div>
                            <div class="col-md-7">
                                <label class="col-md-4 form-control" style="border: hidden" >{{$doctor->userEmail}}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label text-justify">Gender</label>
                            <div class="col-md-1">
                                <label class="col-md-1 control-label">:</label>                           
                            </div>
                            <div class="col-md-7">
                                <label class="col-md-4 form-control" style="border: hidden" >{{$doctor->userGender}}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label text-justify">Dade of Birth</label>
                            <div class="col-md-1">
                                <label class="col-md-1 control-label">:</label>                           
                            </div>
                            <div class="col-md-7">
                                <label class="col-md-4 form-control" style="border: hidden" >{{$doctor->birthday}}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label text-justify">Contact Number</label>
                            <div class="col-md-1">
                                <label class="col-md-1 control-label">:</label>                           
                            </div>
                            <div class="col-md-7">
                                <label class="col-md-4 form-control" style="border: hidden" >{{$doctor->contactNo}}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label text-justify">Address</label>
                            <div class="col-md-1">
                                <label class="col-md-1 control-label">:</label>                           
                            </div>
                            <div class="col-md-7">
                                <label class="col-md-4 form-control" style="border: hidden" >{{$doctor->address}}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label text-justify">Holding Type</label>
                            <div class="col-md-1">
                                <label class="col-md-1 control-label">:</label>                           
                            </div>
                            <div class="col-md-7">
                                <label class="col-md-4 form-control" style="border: hidden" >{{$doctor->holdingType}}</label>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection