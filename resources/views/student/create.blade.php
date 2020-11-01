@extends('layouts.app')
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Student management system</title>
</head>
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check your input<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
        <div class="flex">
            <div class="w-full">
                <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                    <div class="w-full sm:px-4  " >
                        <h1 class="card-title"><strong>Enter the Details below to add new Student</strong></h1>
                        <form action="{{ route('student.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <strong>Student ID:</strong>
                                <input name="student_id" type="text" class="form-control"  placeholder="Enter Student ID">
                            </div>
                            <div class="form-group">
                                <strong>First Name:</strong>
                                <input name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <strong>Last Name:</strong>
                                <input name="lastName" type="text" class="form-control"  placeholder="Enter last name">
                            </div>

                            <div class="form-group">
                                <strong>Course:</strong>
                                <input name="course" type="text" class="form-control"  placeholder="Enter Course name">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </section>
                <br>
                <a class="btn btn-sm btn-primary" href="{{route('student.index')}}">>>Go Back<<</a>
            </div>
        </div>
    </main>
@endsection

