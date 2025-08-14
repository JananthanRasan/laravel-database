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
                            <th>Class Name</th>
                            <th>Class Group</th>
                            <th>Class Order</th>
                            <th>Print Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Class Name</th>
                            <th>Class Group</th>
                            <th>Class Order</th>
                            <th>Print Name</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($classes as $class)
                            <tr>
                                <td>{{ $class->class_name }}</td>
                                <td>{{ $class->class_group }}</td>
                                <td>{{ $class->class_order }}</td>
                                <td>{{ $class->print_name }}</td>
                                <td>
                                    <div class="d-flex flex-column flex-md-row gap-2">
                                        <a href="/classes/{{ $class->id }}" class="btn btn-info">Show</a>
                                        <a href="/classes/{{ $class->id }}/edit" class="btn btn-success">Edit</a>
                                        <form action="/classes/{{ $class->id }}" method="post"
                                            onsubmit="return confirm('Do you want to delete this class?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-warning">Delete</button>
                                        </form>
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
