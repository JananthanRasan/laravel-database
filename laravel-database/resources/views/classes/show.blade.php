@extends('layouts.master')
@section('title', 'Show Class')
@push('styles')
    #form{
    background-color: rgb(161, 194, 205);
    border-radius: 15px;
    }
    #input{
    border-radius: 15px;
    }
@endpush
@section('content')
    <div class="container mt-4 mb-4" id="form">
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-5 mb-5" id="input">
                <a href="/classes" class="btn btn-secondary mt-2">Back</a>
                <h2 class="text-center text-primary mt-3 mb-3">{{ $class->class_name }} DETAILS</h2>
                <table width="100%">
                    <tr>
                        <td width="40%"><label class="col-form-label">Class Name</label></td>
                        <td><input type="text" class="form-control" value="{{ $class->class_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Class Group</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $class->class_group }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Class Order</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $class->class_order }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Print Name</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $class->print_name }}" disabled></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mb-5" id="input">
                <h2 class="text-center text-primary mt-3 mb-3">{{ $class->class_name }} TEACHERS</h2>
                <div class="table-responsive-lg">
                    <table class="table table-bordered table-striped table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Registration No</th>
                                <th scope="col">First Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->registration_no ? "$teacher->registration_no" : "N/A" }}</td>
                                    <td>{{ $teacher->first_name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-5 mx-auto mb-5">
                <div class="row">
                    <div class="col-sm-12 mx-auto border p-3 shadow bg-light" id="input">
                        <h2 class="text-center text-primary mt-3 mb-3">{{ $class->class_name }} SUBJECTS</h2>
                        <div class="table-responsive-lg">
                            <table class="table table-bordered table-striped table-hover align-middle text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Subject Name</th>
                                        <th scope="col">Subject Index</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subjects as $subject)
                                        <tr>
                                            <td>{{ $subject->subject_name }}</td>
                                            <td>{{ $subject->subject_index }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mx-auto border p-3 shadow bg-light mt-5" id="input">
                        <h2 class="text-center text-primary mt-3 mb-3">{{ $class->class_name }} STUDENTS</h2>
                        <div class="table-responsive-lg">
                            <table class="table table-bordered table-striped table-hover align-middle text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Admission No</th>
                                        <th scope="col">First Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->admission_no }}</td>
                                            <td>{{ $student->first_name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
