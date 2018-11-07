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

                                <li >
                                    <a href="{{ route('customer.finance') }}" class="anchors" >
                                        <font color="#6495ed"> <span class="glyphicon glyphicon-usd"></span> Financial Info</font></a>
                                </li>

                                <li class="active" ><a class="anchors" href="{{ route('customer.apply') }}" class="anchors" >
                                        <font color="#6495ed"> <span class="glyphicon glyphicon-pencil"></span> Apply loan</font></a>
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
                                        <font color="#6495ed"> Quick information</font>
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

                                    <div class="panel-heading">
                                        <font color="#6495ed"> <h5>LOAN APPLICATION FORM</</h5></font>
                                    </div>

                                    <div class="panel-body">

                                        <form class="form-horizontal" method="POST" action="{{ route('customer.application.submit') }}">

                                            {{ csrf_field() }}
                                            <input id="customer_id" type="hidden" placeholder="" class="form-control" name="customer_id" value="{{ Auth::user()->id }}" >


                                            {{--YOUR FINANCIAL INFORMATION--}}

                                            <div class="form-group">
                                                <label for="amount" class="col-md-4 control-label"> Amount (Tsh)</label>

                                                <div class="col-md-6">
                                                    <input id="amount" type="text" class="form-control" name="amount" value=" " >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="duration" class="col-md-4 control-label">Repay Time (months)</label>

                                                <div class="col-md-6">
                                                    <input id="duration" type="text" class="form-control" name="duration" value=" " >
                                                </div>
                                            </div>


                                            {{-- SUBMIT BUTTON--}}
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Apply
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
