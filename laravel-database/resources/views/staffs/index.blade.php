@extends('layouts.master')
@section('title', 'All Staffs')

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
                <h2 class="text-center text-primary mb-3 fs-4 fw-bold">All Staff Details</h2>
                <h2>
                    <a href="/staffs/create" class="btn btn-outline-primary w-100 w-md-50 mx-auto mb-3">Create New Staff</a>
                </h2>
                <div class="table-responsive-lg">
                    <table class="table table-bordered table-striped table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Action</th>
                                <th scope="col">Registration No</th>
                                <th scope="col">Title</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">NIC No</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staffs as $staff)
                                <tr>
                                    <td>
                                        <div class="d-flex flex-column flex-md-row gap-2">
                                            <a href="/staffs/{{ $staff->id }}" class="btn btn-info">Show</a>
                                        </div>
                                    </td>
                                    <td>{{ $staff->registration_no }}</td>
                                    <td>{{ $staff->title }}</td>
                                    <td>{{ $staff->first_name }}</td>
                                    <td>{{ $staff->last_name }}</td>
                                    <td>{{ $staff->gender }}</td>
                                    <td>{{ $staff->nic_no }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
