@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">

                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a style="font-size:28px" class="navbar-brand dashboard" href="{{ route('admin') }}">
                                    <font color="#6495ed"> Administrator Panel </font></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">

                                <li >  <a  href="{{ route('admin.addLoans') }}" class="anchors" >
                                        <font color="#6495ed"> <span class="glyphicon glyphicon-euro"></span> Add Loan</font></a>
                                </li>





                            </ul>

                        </div>
                    </nav>

                    <div class="panel-body">

                        <div class="row">



                            {{--APPLICATION FORM--}}

                            <div class="col-md-12">
                                <div class="panel panel-info">

                                    <div class="panel-heading">
                                        <h5>Add Loan</h5>
                                    </div>

                                    <div class="panel-body">

                                        <form class="form-horizontal" method="POST" action="{{ route('admin.loan_types.add.submit') }}">

                                            {{ csrf_field() }}




                                            <div class="form-group">
                                                <label for="description" class="col-md-4 control-label">Loan Description</label>

                                                <div class="col-md-6">
                                                    <input id="description" type="text" class="form-control" name="description" value=" " >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="interest" class="col-md-4 control-label">Interest</label>

                                                <div class="col-md-6">
                                                    <input id="interest" type="text" class="form-control" name="interest" value=" " >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="interest_description" class="col-md-4 control-label">Interest Description</label>

                                                <div class="col-md-6">
                                                    <input id="interest_description" type="text" class="form-control" name="interest_description" value=" " >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="duration" class="col-md-4 control-label">Loan Duration</label>

                                                <div class="col-md-6">
                                                    <input id="duration" type="text" class="form-control" name="duration" value=" " >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="min_no_people" class="col-md-4 control-label">Min No Of People</label>

                                                <div class="col-md-6">
                                                    <input id="min_no_people" type="text" class="form-control" name="min_no_people" value=" " >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="max_no_people" class="col-md-4 control-label">Max No Of People</label>

                                                <div class="col-md-6">
                                                    <input id="max_no_people" type="text" class="form-control" name="max_no_people" value=" " >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="processing_fee" class="col-md-4 control-label">Processing Fee</label>

                                                <div class="col-md-6">
                                                    <input id="processing_fee" type="text" class="form-control" name="precessing_fee" value=" " >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fine" class="col-md-4 control-label">Fine</label>

                                                <div class="col-md-6">
                                                    <input id="fine" type="text" class="form-control" name="fine" value=" " >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="security_cover_ratio" class="col-md-4 control-label">Security Cover</label>

                                                <div class="col-md-6">
                                                    <input id="security_cover_ratio" type="text" class="form-control" name="security_cover_ratio" value=" " >
                                                </div>
                                            </div>

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
