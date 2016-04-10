@extends('master')

@section('title')
        admin home page
@endsection

@section('sidebar')
    <div class="container">
        <div class="jumbotron">
            <h1>admin homepage</h1>
            <hr>
        </div>
    </div>
@endsection

@section('content')
    <div>
        <h3>dashboard</h3>
    </div>
    <div>
        <a href="{{url('admin/add_user')}}" class="btn btn-success">add user</a>
        <a href="{{url('admin/add_teacher')}}" class="btn btn-success">add teacher</a>
        <a href="{{url('admin/add_student')}}" class="btn btn-success">add student</a>
        <a href="{{url('admin/assign_teacher')}}" class="btn btn-success">assign teacher</a>
        <a href="{{url('admin/create_course')}}" class="btn btn-success">create course</a>
        <a href="{{url('admin/create_batch')}}" class="btn btn-success">create batch</a>
        <a href="{{url('admin/add_student_to_batch')}}" class="btn btn-success">add student to batch</a>
    </div>
@endsection

