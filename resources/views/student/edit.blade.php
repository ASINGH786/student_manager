@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('student.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                    <div class="card-body">
                        <h5 class="card-title">Update informations of student</h5>
                        <form action="{{ route('student.update', $student->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Student ID:</label>
                                <input name="student_id" type="text" class="form-control" value="{{$student->student_id}}" placeholder="Enter Student ID">
                            </div>
                            <div class="form-group">
                                <label>First Name:</label>
                                <input name="firstName" type="text" class="form-control" value="{{$student->firstName}}"  placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label>Last Name:</label>
                                <input name="lastName" type="text" class="form-control"  value="{{$student->lastName}}"placeholder="Enter last name">
                            </div>

                            <div class="form-group">
                                <label>Course:</label>
                                <input name="course" type="text" class="form-control"  value="{{$student->course}}" placeholder="Enter Course name">
                            </div>
                            <button type="submit" class="btn btn-primary" >Update</button>
                            <button type="reset" class="btn btn-warning" >Reset</button>
                        </form>
                    </div>
                </section>
                <br>
                <a class="btn btn-sm btn-primary" href="{{route('student.index')}}">>>Go Back<<</a>
            </div>
        </div>
    </main>
@endsection
