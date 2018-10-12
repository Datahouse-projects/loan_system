@extends('customer.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                @if ($errors->has('email'))
                    <div class="panel-heading" > <p style="color: red"> <strong>{{ $errors->first('email') }}</strong> </p> </div>
                @endif

                @if ($errors->has('password'))
                    <div class="panel-heading" > <p style="color: red"> <strong>{{ $errors->first('password') }}</strong> </p> </div>
                @endif


                    <div class="panel-heading"> <font color="#6495ed"><h2>Customer Registration form </h2> </font></div>

                <div class="panel-body">

                <form class="form-horizontal" method="POST" action="{{ route('customer.register.submit') }}">
                    {{ csrf_field() }}

                    {{--PERSONAL INFORMATION--}}

                <div class="form-group" style="margin: 0px" >
                            <div class="col-md-12">
                                <font color="#6495ed"> <h4 >Personal Information</h4></font>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="full_name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="full_name" type="text" class="form-control" name="full_name" value="{{ old('name') }}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dob" class="col-md-4 control-label">Date of birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="text" class="form-control" name="dob" value="" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="marital" class="col-md-4 control-label">Marital Status</label>
                            <div class="col-md-6">
                                <input id="marital" type="text" class="form-control" name="marital" value=" " >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nationality" class="col-md-4 control-label">Nationality</label>

                            <div class="col-md-6">
                                <input id="nationality" type="text" class="form-control" name="nationality" value=" " >
                            </div>
                        </div>


                    {{--RESIDENCE--}}
                    <div class="form-group" style="background-color: #D3E0E9;">
                        <div class="col-md-12"> </div>
                    </div>

                    <div class="form-group" style="margin: 0px" >
                        <div class="col-md-12">
                            <font color="#6495ed">  <h4>Residence</h4></font>
                        </div>
                    </div>

                        <div class="form-group">
                            <label for="region" class="col-md-4 control-label">Region</label>

                            <div class="col-md-6">
                                <input id="region" type="text" class="form-control" name="region" value=" " >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value=" " >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ward" class="col-md-4 control-label">Ward </label>

                            <div class="col-md-6">
                                <input id="ward" type="text" placeholder="" class="form-control" name="ward" value="" >
                            </div>
                        </div>

                        <div class="form-group">
                                <label for="street" class="col-md-4 control-label">Street</label>

                                <div class="col-md-6">
                                    <input id="street" type="text" placeholder="" class="form-control" name="street" value=" " >
                                </div>
                            </div>


                    {{--CONTACT--}}

                <div class="form-group" style="background-color: #D3E0E9;">
                    <div class="col-md-12"> </div>
                </div>

                <div class="form-group" style="margin: 0px" >
                    <div class="col-md-12">
                        <font color="#6495ed">  <h4>Contacts</h4></font>
                    </div>
                </div>


                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value=" " required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Phone number</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value=" " >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kin" class="col-md-4 control-label">Next of Kin</label>

                            <div class="col-md-6">
                                <input id="kin" type="text" placeholder="" class="form-control" name="kin" value=" " >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="k_relationship" class="col-md-4 control-label">Relationship with next of kin</label>

                            <div class="col-md-6">
                                <input id="k_relationship" type="text" placeholder="" class="form-control" name="k_relationship" value=" " required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="k_phone" class="col-md-4 control-label">next of kin phone</label>

                            <div class="col-md-6">
                                <input id="k_phone" type="text" placeholder="" class="form-control" name="k_phone" value=" " required>
                            </div>
                        </div>



                    {{--LOGIN INFORMATION--}}

                <div class="form-group" style="background-color: #122b40;">
                    <div class="col-md-12"> </div>
                </div>

                <div class="form-group" style="margin: 0px" >
                    <div class="col-md-12">
                        <font color="#6495ed"> <h4>Login information</h4></font>
                    </div>
                </div>

                    <div class="form-group">
                        <label for="password" class="col-md-8 control-label"> <i> Your email will be used to login </i> </label>

                        <div class="col-md-4">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-4 control-label">Create a secure password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                        </div>
                    </div>


                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Next
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
