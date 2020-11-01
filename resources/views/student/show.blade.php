@extends('layouts.app')
@section('content')
    <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">

                <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                    <div class="flex">
                        <div class="w-full">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Sudent ID:</strong>
                                    {{ $student->student_id }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>First Name:</strong>
                                    {{ $student->firstName }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Last Name:</strong>
                                    {{ $student->lastName }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Last Name:</strong>
                                    {{ $student->course }}
                                </div>

                            </div>

                        </div>
                    </div>
                </section>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('student.index') }}"> <i class="fas fa-backward "></i>>>Go Back<<</a>
        </div>

    </main>
@endsection
