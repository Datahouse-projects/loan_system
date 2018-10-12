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
                                <a style="font-size:28px" class="navbar-brand dashboard" href="{{ route('admin') }}">
                                    <font color="#6495ed">Officers Panel</font> </a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">

                                <li >  <a  href="{{ route('admin.officer.add') }}" class="anchors" >
                                        <font color="#6495ed"><span class="glyphicon glyphicon-user"></span> Add officer</font></a>
                                </li>





                            </ul>

                        </div>
                    </nav>



                    <div class="panel-body">

                        <div class="col-md-12">

                            <table class="table">
                                <thead>

                                <tr>
                                    <th><font color="#6495ed">S/N</font></th>
                                    <th><font color="#6495ed">Officers's name</font></th>
                                    <th><font color="#6495ed">Email </font></th>
                                    <th><font color="#6495ed">Status</font></th>
                                    <th> </th>
                                    <th> </th>
                                </tr>
                                </thead>

                                <tbody id="products-list" name="products-list">

                                @foreach ($officers as $officer)
                                    <tr >
                                        <td> {{$officer->id}} </td>
                                        <td> {{$officer->name}}</td>
                                        <td> {{$officer->email}}</td>
                                        <td>{{$officer->role }}</td>

                                        <td> <a class="btn btn-primary btn-sm " href="{{route("admin.officer.remove")}}/{{$officer->id}}"> Remove </a> </td>

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
