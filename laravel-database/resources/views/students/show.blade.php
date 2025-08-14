@extends('layouts.master')
@section('title', 'Show Student')
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
            <div class="col-sm-6 mx-auto border p-3 shadow bg-light mt-5 mb-5" id="input">
                <a href="/students" class="btn btn-secondary mt-2">Back</a>
                <h2 class="text-center text-primary mt-3 mb-3">{{ $student->first_name }} DETAILS</h2>
                <table width="100%s">
                    <tr>
                        <td width="40%"><label class="col-form-label">Admission No</label></td>
                        <td><input type="text"class="form-control"
                                value="{{ $student->admission_no }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Fist Name</label></td>
                        <td><input type="text"  class="form-control mt-2"
                                value="{{ $student->first_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Last Name</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->last_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Full Name</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->full_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Gender</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->gender }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Date Of Birth</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->date_of_birth }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">NIC No</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->stu_nic_no }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Religion</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->religion }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Birth Certificate No</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->birth_certificate_no }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Telephone No</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->tp_No }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Email</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->email_address }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Class</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->class_name->class_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Medium</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->medium }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Former School Id</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->former_school_id }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Admission Date</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->date_of_addmission }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Mode Of Travel</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->mode_of_travel }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Permanent Address</label></td>
                        <td><textarea class="form-control mt-2" rows="5" disabled>{{ $student->perm_address }}</textarea></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Residental Address</label></td>
                        <td><textarea class="form-control mt-2" rows="5" disabled>{{ $student->resident_address }}</textarea></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2">Family Id</label></td>
                        <td><input type="text" class="form-control mt-2"
                                value="{{ $student->family_id }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label class="col-form-label mt-2 mb-4">Father's NIC No</label></td>
                        <td><input type="text" class="form-control mt-2 mb-4"
                                value="{{ $student->fa_nic_no }}" disabled></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
