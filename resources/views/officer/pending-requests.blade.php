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

                            <div class="col-md-12">

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><font color="#6495ed">Loan ref No</font></th>
                                        <th><font color="#6495ed">Amount Requested</font></th>
                                        <th><font color="#6495ed">Payment Duration</font></th>
                                        <th><font color="#6495ed">Action</font></th>

                                    </tr>
                                    </thead>

                                    <tbody id="products-list" name="products-list">

                                    @foreach ($loans as $loan)
                                        <tr id="product">
                                            <td>40{{$loan->id}}</td>
                                            <td> Tshs {{$loan->amount}} </td>
                                            <td>{{$loan->duration}} Weeks  </td>
                                            <td>
                                                <a  href="{{route("officer.loan.details")}}/{{$loan->id}}" class="btn btn-primary btn-sm"  value='{{$loan->id}}'> Assess </a>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>

                            </div>


                    </div>


                </div>

            </div>
        </div>
    </div>
@endsection
