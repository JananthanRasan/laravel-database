@extends('backend.layout.main')

@section('content')
    <div class="container-fluid px-4 mt-4">

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Registration No</th>
                            <th>Title</th>
                            <th>First Name</th>
                            <th>Gender</th>
                            <th>Indexes</th>
                            <th>NIC No</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Registration No</th>
                            <th>Title</th>
                            <th>First Name</th>
                            <th>Gender</th>
                            <th>Indexes</th>
                            <th>NIC No</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($staffs as $staff)
                            <tr>
                                <td>{{ $staff->registration_no }}</td>
                                <td>{{ $staff->title }}</td>
                                <td>{{ $staff->first_name }}</td>
                                <td>{{ $staff->gender }}</td>
                                <td>{{ $staff->indexes }}</td>
                                <td>{{ $staff->nic_no }}</td>
                                <td>
                                    <div class="d-flex flex-column flex-md-row gap-2">
                                        <a href="/staffs/{{ $staff->id }}" class="btn btn-info">Show</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
