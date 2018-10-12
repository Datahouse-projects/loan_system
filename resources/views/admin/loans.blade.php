@extends('layouts.app')

@section('content')
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" ><font color="#d2691e"><b>Administator Panel</b></font></a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="#"><a href="{{ route('admin') }}"><font color="#6495ed"><b><span class="glyphicon glyphicon-user"></span> OFFICERS</b></font></a></li>
                    <li class="#"><a href="{{ route('admin.loans') }}"><font color="#6495ed"><b><span class="glyphicon glyphicon-euro"></span> LOANS</b></font></a></li>

                </ul>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">

                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a style="font-size:28px" class="navbar-brand dashboard" href="#">
                                    <font color="#6495ed">Loan Panel</font> </a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">

                                <li >  <a  href="{{ route('admin.addLoans') }}" class="anchors" >
                                        <font color="#6495ed"><span class="glyphicon glyphicon-euro"></span> Add Loan Type</font></a>
                                </li>





                            </ul>

                        </div>
                    </nav>



                    <div class="panel-body">

                        <div class="col-md-12">

                            <table class="table">
                                <thead>

                                <tr>
                                    <th><font color="#6495ed">Description</font></th>
                                    <th><font color="#6495ed">Interest</font></th>
                                    <th><font color="#6495ed">Interest description</font></th>
                                    <th><font color="#6495ed">Duration</font></th>
                                    <th><font color="#6495ed">Min No_people</font></th>
                                    <th><font color="#6495ed">Max No_People</font></th>
                                    <th><font color="#6495ed">Processing Fee</font></th>
                                    <th><font color="#6495ed">Fine</font></th>
                                    <th><font color="#6495ed">Security Cover</font></th>
                                </tr>
                                </thead>

                                <tbody id="products-list" name="products-list">

                                @foreach ($loan_types as $loan_type)
                                    <tr >
                                        <td> {{$loan_type->description}} </td>
                                        <td> {{$loan_type->interest}}</td>
                                        <td> {{$loan_type->interest_description}}</td>
                                        <td>{{$loan_type->duration}}</td>
                                        <td>{{$loan_type->min_no_people}}</td>
                                        <td>{{$loan_type->max_no_people}}</td>
                                        <td>{{$loan_type->processing_fee}}</td>
                                        <td>{{$loan_type->fine}}</td>
                                        <td>{{$loan_type->security_cover_ratio}}</td>

                                        <td> <a class="btn btn-primary btn-sm " href="{{route("admin.loan_types.remove")}}/{{$loan_types->id}}"> Remove </a> </td>

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
