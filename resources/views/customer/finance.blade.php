@extends('customer.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">

                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a style="font-size:28px" class="navbar-brand dashboard" href="{{ route('customer.status') }}">
                                    <font color="#6495ed">Customers Dashboard </font></a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">

                                <li >  <a  href="{{ route('customer.status') }}" class="anchors" >
                                        <font color="#6495ed"> <span class="glyphicon glyphicon-user"></span> My Profile</font></a>
                                </li>

                                <li  class="active">
                                    <a href="{{ route('customer.finance') }}" class="anchors" >
                                        <font color="#6495ed"> <span class="glyphicon glyphicon-usd"></span> Financial Info</font></a>
                                </li>

                                <li><a class="anchors" href="{{ route('customer.apply') }}" class="anchors" >
                                        <font color="#6495ed"><span class="glyphicon glyphicon-pencil"></span> Apply loan</font></a>
                                </li>

                                <li><a href="{{ route('customer.repay') }}" class="anchors" >
                                        <font color="#6495ed"><span class="glyphicon glyphicon-duplicate"></span> repay loan</font></a>
                                </li>

                            </ul>
                        </div>
                    </nav>

                    <div class="panel-body">

                        <div class="row">


                            {{--QUICK INFORMATION--}}
                            <div class="col-md-4">
                                <div class="panel panel-success">

                                    <div class="panel-heading">
                                        <font color="#6495ed">  Quick information</font>
                                    </div>
                                    <div class="panel-body">
                                        <b>Name:</b> {{ Auth::user()->full_name }}  <br />
                                        <b>Phone:</b> {{  $contact->phone_number }}  <br />
                                        <b>Email:</b> {{ Auth::user()->email }} <br />
                                        <b>Residence:</b> {{  $contact->city }} , {{  $contact->region }}  <br />

                                    </div>

                                </div>
                            </div>


                            {{--FINACIAL INFORMATION--}}

                            <div class="col-md-8">
                                <div class="panel panel-success">

                                    <div class="panel-body">

                                        <form class="form-horizontal" method="POST" action="{{ route('customer.finance.update') }}">

                                            {{ csrf_field() }}
                                            <input id="customer_id" type="hidden" placeholder="" class="form-control" name="customer_id" value="{{ Auth::user()->id }}" >


                                            {{--YOUR FINANCIAL INFORMATION--}}

                                            <div class="form-group" style="margin: 0px; padding: 0px" >
                                                <div class="col-md-12" >
                                                    <font color="#6495ed"><h4>Your Financial Information</h4></font>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                                <label for="employment" class="col-md-4 control-label"> occupation</label>

                                                                <div class="col-md-6">
                                                                    <input id="employment" type="text" class="form-control" name="employment" value=" " >
                                                                </div>
                                                            </div>

                                                        <div class="form-group">
                                                                <label for="employer" class="col-md-4 control-label">Employer</label>

                                                                <div class="col-md-6">
                                                                    <input id="employer" type="text" class="form-control" name="employer" value=" " >
                                                                </div>
                                                            </div>

                                                        <div class="form-group">
                                                            <label for="income" class="col-md-4 control-label">Average income </label>

                                                            <div class="col-md-6">
                                                                <input id="income" type="text" placeholder="" class="form-control" name="income" value="" >
                                                            </div>
                                                        </div>

                                                    {{--GUARANTOR INFORMATION--}}

                                                    <div class="form-group" style="margin: 0px" >
                                                        <div class="col-md-12">
                                                            <font color="#6495ed"> <h4>Guarantor's Information</h4></font>
                                                        </div>
                                                    </div>

                                                        <div class="form-group">
                                                            <label for="g_name" class="col-md-4 control-label">full name</label>

                                                            <div class="col-md-6">
                                                                <input id="g_name" type="text" placeholder="" class="form-control" name="g_name" value=" " >
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="g_occupation" class="col-md-4 control-label"> Occupation</label>

                                                            <div class="col-md-6">
                                                                <input id="g_occupation" type="text" placeholder="" class="form-control" name="g_occupation" value=" " >
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="g_income" class="col-md-4 control-label"> Income</label>

                                                            <div class="col-md-6">
                                                                <input id="g_income" type="text" placeholder="" class="form-control" name="g_income" value=" " >
                                                        </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="g_nationality" class="col-md-4 control-label"> Nationality</label>

                                                            <div class="col-md-6">
                                                                <input id="g_nationality" type="text" placeholder="" class="form-control" name="g_nationality" value=" " >
                                                            </div>
                                                        </div>

                                                    {{--GUARANTOR CONTACT--}}


                                                    <div class="form-group" style="margin: 0px" >
                                                        <div class="col-md-12">
                                                            <font color="#6495ed"><h4>Guarantor's Contacts</h4></font>
                                                        </div>
                                                    </div>

                                                          <div class="form-group">
                                                        <label for="g_phone" class="col-md-4 control-label"> Phone</label>

                                                        <div class="col-md-6">
                                                            <input id="g_phone" type="text" placeholder="" class="form-control" name="g_phone" value=" " >
                                                        </div>
                                                    </div>

                                                          <div class="form-group">
                                                        <label for="g_residence" class="col-md-4 control-label">Permanent Residence</label>

                                                        <div class="col-md-6">
                                                            <input id="g_residence" type="text" placeholder="" class="form-control" name="g_residence" value=" " >
                                                        </div>
                                                    </div>


                                                   {{-- SUBMIT BUTTON--}}



                                            <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                Save
                                                            </button>
                                                        </div>
                                                    </div>
                                        </form>


                                </form>


                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
