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

                                <li class="active">  <a  href="{{ route('customer.status') }}" class="anchors" >
                                        <font color="#6495ed"> <span class="glyphicon glyphicon-user"></span> My Profile</font></a>
                                </li>

                                <li >
                                    <a href="{{ route('customer.finance') }}" class="anchors" >
                                        <font color="#6495ed"> <span class="glyphicon glyphicon-usd"></span> Financial Info</font></a>
                                </li>

                                <li><a class="anchors" href="{{ route('customer.apply') }}" class="anchors" >
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

                            <div class="col-md-8">
                                <div class="panel panel-success">
                                    <div class="panel-heading"><font color="#6495ed"> Loan Status</font> </div>

                                    <div class="panel-body">

                                            @if(Auth::user()->has_loan)

                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Total Loan  </th>
                                                        <th>Remaining Debt</th>
                                                        <th>Repay/month</th>
                                                        <th>Loan Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody name="loans">
                                                        <tr id="">
                                                            <td>Tsh {{$loan->amount}}</td>
                                                            <td>Tsh {{$loan->remaining_amount}}</td>
                                                            <td>Tsh {{$loan->per_month}}</td>
                                                            <td>{{$loan->status }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>


                                            @else
                                                You have not applied for any loan <br> <br>

                                                Click  <strong>   apply Loan </strong> on menu bar to apply a loan
                                            @endif



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
