@extends('layouts.master')
@section('title', 'Show Subject')
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
                <a href="/subjects" class="btn btn-secondary mt-2">Back</a>
                <h2 class="text-center text-primary mt-3 mb-3">{{$subject->subject_name}} DETAILS</h2>
                <table width="100%s">
                    <tr>
                        <td><label class="col-form-label">Subject Name</label></td>
                        <td><input type="text"class="form-control"
                                value="{{ $subject->subject_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Subject Index</label></td>
                        <td><input type="text"  class="form-control mt-2"
                                value="{{ $subject->subject_index }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Subject Group</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $subject->subject_group }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Subject Order</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $subject->subject_order }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Subject Number</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $subject->subject_number }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Is Compulsory</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $subject->is_compulsory }}" disabled></td>
                    </tr>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mb-5" id="input">
                <h2 class="text-center text-primary mt-3 mb-3">{{ $subject->subject_name }} TEACHERS</h2>
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
            <div class="col-sm-5 mx-auto">
            <div class="col-sm-12 mx-auto border p-3 shadow bg-light mb-5" id="input">
                <h2 class="text-center text-primary mt-3 mb-3">{{ $subject->subject_name }} CLASSES</h2>
                <div class="table-responsive-lg">
                    <table class="table table-bordered table-striped table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Subject Name</th>
                                <th scope="col">Subject Index</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classes as $class)
                                <tr>
                                    <td>{{ $class->class_name }}</td>
                                    <td>{{ $class->class_group }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
