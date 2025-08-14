@extends('backend.layout.main')

@section('content')
    <div class="container-fluid px-4 mt-4">

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Subject List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Subject Name</th>
                            <th>Subject Index</th>
                            <th>Subject Group</th>
                            <th>Subject Order</th>
                            <th>Subject Number</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Subject Name</th>
                            <th>Subject Index</th>
                            <th>Subject Group</th>
                            <th>Subject Order</th>
                            <th>Subject Number</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr>
                                <td>{{ $subject->subject_name }}</td>
                                <td>{{ $subject->subject_index }}</td>
                                <td>{{ $subject->subject_group }}</td>
                                <td>{{ $subject->subject_order }}</td>
                                <td>{{ $subject->subject_number }}</td>
                                <td>
                                    <div class="d-flex flex-column flex-md-row gap-2">
                                        <a href="/subjects/{{ $subject->id }}" class="btn btn-info">Show</a>
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
