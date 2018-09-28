@extends('admin.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">

                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a style="font-size:28px" class="navbar-brand dashboard" href="{{ route('admin') }}">
                                    Administrator Panel </a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">

                                <li >  <a  href="{{ route('admin.officer.add') }}" class="anchors" >
                                        <span class="glyphicon glyphicon-user"></span> Add officer</a>
                                </li>





                            </ul>

                        </div>
                    </nav>



                    <div class="panel-body">

                        <div class="col-md-12">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Officers's name</th>
                                    <th>Status</th>
                                    <th> </th>
                                    <th> </th>
                                </tr>
                                </thead>

                                <tbody id="products-list" name="products-list">

                                @foreach ($officers as $officer)
                                    <tr >
                                        <td> {{$officer->id}} </td>
                                        <td> {{$officer->full_name}}</td>
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
