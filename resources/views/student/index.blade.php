@extends('layouts.app')
    <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Student Manager') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <main class="sm:container sm:mx-auto sm:max-w-1/2 sm:mt-20">
        <div class="flex">
            <div class="w-flex">
                <h1><strong>Student Manager</strong></h1>
                <br>
                <section class="flex flex-col bg-grey sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                    <form action="{{url('/create/')}} " method="post">
                        <table class="table-auto">
                            <thead class="table-dark">
                            <tr>
                                <th class="border w-1/2 px-4 py-2">Student ID</th>
                                <th class="border w-1/2 px-4 py-2">First Name</th>
                                <th class="border w-1/2 px-4 py-2">Last Name</th>
                                <th class="border w-1/2 px-4 py-2">Course</th>
                                <th class="border w-1/2 px-4 py-2">Operations</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($student as $stud)
                                <tr >
                                    <td class="border px-4 py-2">{{ $stud->student_id }}</td>
                                    <td class="border px-4 py-2">{{ $stud->firstName }}</td>
                                    <td class="border px-4 py-2">{{ $stud->lastName }}</td>
                                    <td class="border px-4 py-2">{{ $stud->course }}</td>
                                    <td class="border px-4 py-2">
                                        <form action="{{route('student.destroy', $stud->id)}}" method="post">

                                            <a href="{{ route('student.edit', $stud->id) }}" class="btn btn-sm btn-primary">Edit</a><br>
                                            <a href="{{ route('student.show', $stud->id) }}" class="btn btn-sm btn-info">Show</a><br>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>


                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </form>
                </section>
                <br>
                <a href="{{ route('student.create') }}" class="btn btn-sm btn-success">Add Student</a>
            </div>
        </div>
    </main>
@endsection
