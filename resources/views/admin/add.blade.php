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

                        <div class="row">



                            {{--APPLICATION FORM--}}

                            <div class="col-md-12">
                                <div class="panel panel-success">

                                    <div class="panel-heading">
                                        <h5>Add Officer</h5>
                                    </div>

                                    <div class="panel-body">

                                        <form class="form-horizontal" method="POST" action="{{ route('admin.officer.add.submit') }}">

                                            {{ csrf_field() }}




                                            <div class="form-group">
                                                <label for="full_name" class="col-md-4 control-label"> Full name </label>

                                                <div class="col-md-6">
                                                    <input id="full_name" type="text" class="form-control" name="full_name" value=" " >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email" class="col-md-4 control-label"> Email</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="text" class="form-control" name="email" value=" " >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="role" class="col-md-4 control-label"> Role</label>

                                                <div class="col-md-6">
                                                    <select id="role" class="form-control" id="role" name="role" value=" ">
                                                        <option>Manager</option>
                                                        <option>Officer</option>
                                                    </select>

                                                </div>
                                            </div>


                                            {{-- SUBMIT BUTTON--}}
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Add
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
