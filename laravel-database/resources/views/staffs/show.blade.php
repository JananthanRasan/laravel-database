@extends('layouts.master')
@section('title', 'Show Staff')
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
                <a href="/staffs" class="btn btn-secondary mt-2">Back</a>
                <h2 class="text-center text-primary mt-3 mb-3">{{ $staff->first_name }} DETAILS</h2>
                <table width="100%s">
                    <tr>
                        <td width="40%"><label class="col-form-label">Registration No</label></td>
                        <td><input type="text"class="form-control" value="{{ $staff->registration_no }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">NIC No</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->nic_no }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">First Name</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->first_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Last Name</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->last_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Full Name</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->full_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Title</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->title }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Gender</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->gender }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Indexes</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->indexes }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Date Of Birth</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->date_of_birth }}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Permanent Address</label></td>
                        <td>
                            <textarea class="form-control mt-2" rows="5" disabled>{{ $staff->permanent_address }}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Residental Address</label></td>
                        <td>
                            <textarea class="form-control mt-2" rows="5" disabled>{{ $staff->resident_address }}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Telephone No(Home)</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->tele_no_home }}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Telephone No(Mobile)</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->tele_no_mbile }}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Date Of First Appointment</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->date_of_first_appointment }}"
                                disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Category Of Appointment</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->category_of_appointment }}"
                                disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Date Of First Appointment At Present</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $staff->date_of_first_appointment_at_present }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Nature Of Present Appointment</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $staff->nature_of_present_appointment }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Present Grade & Service ID</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->present_grade_service_id }}"
                                disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Date Of Appointment For Present Grade</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $staff->date_of_appointment_for_present_grade }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">W and OP No</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->w_and_op_no }}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Civil Status</label></td>
                        <td><input type="text" class="form-control mt-2" value="{{ $staff->civil_status }}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2 mb-4">Steam ID</label></td>
                        <td><input type="text" class="form-control mt-2 mb-4" value="{{ $staff->steam_id }}" disabled>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-5 mb-5" id="input">
                <h2 class="text-center text-primary mt-3 mb-3">{{ $staff->first_name }} SUBJECTS</h2>
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

            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-5 mb-5" id="input">
                <h2 class="text-center text-primary mt-3 mb-3">{{ $staff->first_name}} CLASSES</h2>
                <div class="table-responsive-lg">
                    <table class="table table-bordered table-striped table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Class Name</th>
                                <th scope="col">Class Group</th>
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

@endsection
