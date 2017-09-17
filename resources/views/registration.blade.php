@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Doctor Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{url('/')}}/registration" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Full Name</label>

                            <div class="col-md-6">
                                <input type="name" value="{{old('name')}}" name='name' placeholder="Enter Doctor Full Name" class="form-control"><br>
                                {{($errors->has('name'))? $errors->first('name'):""}}
                              
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('userEmail') ? ' has-error' : '' }}">
                            <label for="userEmail" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" value="{{old('userEmail')}}" name='userEmail' placeholder="Enter Doctor Email" class="form-control" style="width: 100%">
                            {{($errors->has('userEmail'))? $errors->first('userEmail'):""}}

                 
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('userPass') ? ' has-error' : '' }}">
                            <label for="userPass" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" value="{{old('userPass')}}" name='userPass' placeholder="Enter doctor Password" class="form-control" style="width: 100%">
                            {{($errors->has('userPass'))? $errors->first('userPass'):""}}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('userGender') ? ' has-error' : '' }}">
                            <label for="userGender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input type="radio" value="M" name='userGender' class=""> Male &nbsp;
                              <input type="radio" value="F" name='userGender' class=""> Female &nbsp;
                              {{($errors->has('userGender'))? $errors->first('userGender'):""}}
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input type="date" value="{{old('birthday')}}" name='birthday' placeholder="Enter dath of birth" class="form-control">
                            {{($errors->has('birthday'))? $errors->first('birthday'):""}}
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('contactNo') ? ' has-error' : '' }}">
                            <label for="contactNo" class="col-md-4 control-label">Contact Number</label>

                            <div class="col-md-6">
                                <input type="number" value="{{old('contactNo')}}" name='contactNo' placeholder="Enter Contact No" class="form-control">
                            {{($errors->has('contactNo'))? $errors->first('contactNo'):""}}
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('holdingType') ? ' has-error' : '' }}">
                            <label for="holdingType" class="col-md-4 control-label">Doctor Holding Type</label>

                            <div class="col-md-6">
                                <input type="radio" value="Owner" name='holdingType' class="input-xlarge"> Owner &nbsp;
                            <input type="radio" value="Rent" name='holdingType' class="input-xlarge"> Rent &nbsp;
                            {{($errors->has('holdingType'))? $errors->first('holdingType'):""}}
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input type="text" value="{{old('address')}}" name='address' placeholder="Enter address" class="form-control">
                            {{($errors->has('address'))? $errors->first('address'):""}}
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('userType') ? ' has-error' : '' }}">
                            <label for="userType" class="col-md-4 control-label">Type</label>

                            <div class="col-md-6">
                                <select name="userType" class="form-control">                    
                                  <option value="Doctor">Doctor</option>
                            </select>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
