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
    <form class="form-horizontal">
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
                <label class="col-md-4 control-label" for="textinput">Text Input</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                    <span class="help-block">help</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="gender">Gender</label>
                <div class="col-md-4">
                    <input id="gender" name="gender" type="text" placeholder="enter Gender" class="form-control input-md">

                </div>
            </div>

        </fieldset>
    </form>

@endsection
