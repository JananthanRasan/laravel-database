@extends('layouts.master')
@section('title', 'All Subjects')

@push('styles')
    <style>
        #form {
            background: linear-gradient(to right, #a1c2cd, #dbeef3);
            border-radius: 15px;
            padding: 20px;
        }
        #input {
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
    </style>
@endpush

@section('content')
    <div class="container-fluid mt-3 mb-4 px-3 px-md-5" id="form">
        <div class="row">
            <div class="col-sm-12 m-auto bg-light mb-5 mt-5" id="input">
                <h2 class="text-center text-primary mb-3 fs-4 fw-bold">All Class Details</h2>
                <h2>
                    <a href="/classes/create" class="btn btn-outline-primary w-100 w-md-50 mx-auto mb-3">Create New Class</a>
                </h2>
                <div class="table-responsive-lg">
                    <table class="table table-bordered table-striped table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Action</th>
                                <th scope="col">Class Name</th>
                                <th scope="col">Class Group</th>
                                <th scope="col">Class Order</th>
                                <th scope="col">Print Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classes as $class)
                                <tr>
                                    <td>
                                        <div class="d-flex flex-column flex-md-row gap-2">
                                            <a href="/classes/{{ $class->id }}" class="btn btn-info" >Show</a>
                                        </div>
                                    </td>
                                    <td>{{ $class->class_name }}</td>
                                    <td>{{ $class->class_group }}</td>
                                    <td>{{ $class->class_order }}</td>
                                    <td>{{ $class->print_name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
