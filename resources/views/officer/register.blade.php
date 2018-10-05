@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                @if ($errors->has('email'))
                    <div class="panel-heading" > <p style="color: red"> <strong>{{ $errors->first('email') }}</strong> </p> </div>
                @endif

                @if ($errors->has('password'))
                    <div class="panel-heading" > <p style="color: red"> <strong>{{ $errors->first('password') }}</strong> </p> </div>
                @endif


                <div class="panel-heading"> <h2>Officer Registration form </h2> </div>

                <div class="panel-body">

                <form class="form-horizontal" method="POST" action="{{ route('customer.register.submit') }}">
                    {{ csrf_field() }}

                    {{--PERSONAL INFORMATION--}}

                <div class="form-group" style="margin: 0px" >
                            <div class="col-md-12">
                                <h4 >Personal Information</h4>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="full_name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="full_name" type="text" class="form-control" name="full_name" value="{{ old('name') }}" >
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value=" " required>
                            </div>
                        </div>


                    <div class="form-group">
                        <label for="password" class="col-md-4 control-label">Create a secure password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                        </div>
                    </div>


                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Next
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
