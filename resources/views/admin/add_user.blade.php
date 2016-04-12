@extends('master')
@section('title')
    add User
@endsection

@section('sidebar')
    <div class="container">
        <div class="jumbotron">
            <h1>add user</h1>
            <hr>
        </div>
    </div>

@endsection

@section('content')
    <form class="form-horizontal" method="post" action="{{url('/admin/modon')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>

            <!-- Form Name -->
            <legend>add user</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">name</label>
                <div class="col-md-4">
                    <input id="name" name="name" type="text" placeholder="enter name" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="address">Address</label>
                <div class="col-md-4">
                    <input id="address" name="address" type="text" placeholder="enter name" class="form-control input-md">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="gender">Gender</label>
                <div class="col-md-4">
                    <input id="gender" name="gender" type="text" placeholder="enter Gender" class="form-control input-md">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="contact no">Contact No</label>
                <div class="col-md-4">
                    <input id="contact no" name="contact no" type="tel" placeholder="enter contact number" class="form-control input-md">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="email">E-Mail</label>
                <div class="col-md-4">
                    <input id="email" name="email" type="email" placeholder="enter email" class="form-control input-md">
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="dob">dob</label>
                <div class="col-md-4">
                    <input id="dob" name="dob" type="date"  class="form-control input-md">
                </div>
            </div>
            <div class="col-md-12 center-block text-center">
            <button href="{{url('admin/submit')}}" class="btn btn-success">submit</button>
            </div>
        </fieldset>


    </form>

    {{--{!! Form::open() !!}--}}

    {{--{!! Form::close() !!}--}}



@endsection
