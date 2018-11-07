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
                                        <font color="#6495ed">  <span class="glyphicon glyphicon-user"></span> My Profile</font></a>
                                </li>

                                <li  >
                                    <a href="{{ route('customer.finance') }}" class="anchors" >
                                        <font color="#6495ed"> <span class="glyphicon glyphicon-usd"></span> Financial Info</font></a>
                                </li>

                                <li><a class="anchors" href="{{ route('customer.apply') }}" class="anchors" >
                                        <font color="#6495ed"> <span class="glyphicon glyphicon-pencil"></span> Apply loan</font></a>
                                </li>

                                <li class="active"><a href="{{ route('customer.repay') }}" class="anchors" >
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

                            {{--APPLICATION FORM--}}

                            <div class="col-md-8">
                                <div class="panel panel-success">





                                    <div class="panel-body">

                                        <form class="form-horizontal" method="POST" action="{{ route('customer.repayment.submit') }}">

                                            {{ csrf_field() }}
                                            <input id="customer_id" type="hidden" placeholder="" class="form-control" name="customer_id" value="{{ Auth::user()->id }}" >

                                            <font color="#6495ed"><h5>  <strong> LOAN REPAYMENT STEPS </strong> </h5></font>

                                            1. Transfer your money to one of our business accounts <br />
                                                ==> M-pesa <strong> 700300 </strong> <br />
                                                ==> Tigo-pesa <strong> 700900 </strong> <br />
                                                ==> Airtel-Money <strong> 700200 </strong> <br />
                                                ==> Halo-pesa <strong> 700600 </strong> <br /> <br />

                                            <font color="#6495ed">2. Submit the reference number you received after payment </font><br /> <br />


                                            {{--YOUR FINANCIAL INFORMATION--}}

                                            <div class="form-group">
                                                <label for="network" class="col-md-4 control-label"> Cellular Network</label>

                                                <div class="col-md-6">

                                                    <div class="col-md-12 inputGroupContainer">
                                                        <div class="input-group">
                                                            <select class="form-control" id="network" name="network">
                                                                <option>M-pesa</option>
                                                                <option>Tigo-pesa</option>
                                                                <option>Airtel-Money </option>
                                                                <option>Halo-pesa </option>
                                                            </select>
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-phone" style="font-size: 24"> </span></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="reference-number" class="col-md-4 control-label">Reference number</label>

                                                <div class="col-md-6">
                                                    <input id="reference-number" type="text" class="form-control" name="reference-number" value=" " >
                                                </div>
                                            </div>


                                            {{-- SUBMIT BUTTON--}}
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Submit
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
