@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">

                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a style="font-size:28px" class="navbar-brand dashboard" href="{{ route('officer.pending') }}">
                                    <font color="#6495ed"> Officer Desk</font> </a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">

                                <li class="active">  <a  href="{{ route('officer.pending') }}" class="anchors" >
                                        <font color="#6495ed"> <span class="glyphicon glyphicon-user"></span> Loan Requests</font></a>
                                </li>

                                <li >
                                    <a href="{{ route('officer.approved') }}" class="anchors" >
                                        <font color="#6495ed"> <span class="glyphicon glyphicon-usd"></span> Active Loans</font></a>
                                </li>


                              

                            </ul>
                        </div>
                    </nav>

                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-4">
                                <div class="panel panel-success">

                                    <div class="panel-heading">
                                        Loan information
                                    </div>

                                    <div class="panel-body">
                                        <b>Requested amount: </b> {{ $loan->amount }}  <br />
                                        <b>Repay duration: </b> {{  $loan->duration }} weeks <br />
                                        <b>Request Date: </b> {{ $loan->created_at }} <br />
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="panel panel-success">

                                    <div class="panel-heading">
                                        Requested By
                                    </div>

                                    {{--<div class="panel-body">
                                        <b>Name: </b> {{ $customer->full_name }}  <br />
                                        <b>Residence: </b>  {{  $contact->city }}, {{  $contact->region }} <br />
                                        <b>Occupation: </b> {{ $customer->employment_type }}  <br />
                                        <b>Average Income: </b> {{ $customer->average_income }}  <br />
                                        <b>Phone: </b> {{ $contact->phone_number }} <br />
                                        <b>Next of Kin: </b> {{ $contact->next_of_kin }} <br />
                                        <b>Kin's phone: </b> {{ $contact->kin_phone_number }} <br />
                                    </div>--}}

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="panel panel-success">

                                    <div class="panel-heading">
                                        Guarantor Information
                                    </div>

                                    <div class="panel-body">
                                      {{--  <b>Name: </b> {{ $guarantor->full_name }}  <br />
                                        <b>Residence: </b>  {{  $guarantor->residence }}, {{  $contact->region }} <br />
                                        <b>Phone: </b> {{ $guarantor->phone_number }} <br />
                                        <b>Occupation: </b> {{ $guarantor->occupation }} <br />
                                        <b>Average Income : </b> {{ $guarantor->average_income }} <br />
                                    </div>--}}

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <a  href="{{route("officer")}}" class="btn btn-primary btn-sm"  > Go back </a>
                            </div>

                            <div class="col-md-2">
                                <a  href="{{route("officer.loan.invalidate")}}/{{$loan->id}}" class="btn btn-primary btn-sm" > Invalidate </a>
                            </div>

                            @if((Auth::user()->role)=="manager")

                                <div class="col-md-2">
                                    <a  href="{{route("officer.loan.deny")}}/{{$loan->id}}" class="btn btn-primary btn-sm" > Deny </a>
                                </div>

                                <div class="col-md-2">
                                    <a  href="{{route("officer.loan.verify")}}/{{$loan->id}}" class="btn btn-primary btn-sm" > Grant </a>
                                </div>
                            @else

                                <div class="col-md-2">
                                    <a  href='javascript:void(0);' class="btn btn-default btn-sm" > Deny </a>
                                </div>

                                <div class="col-md-2">
                                    <a  href='javascript:void(0);' class="btn btn-default btn-sm" > Grant </a>
                                </div>

                            @endif

                        </div>



                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
