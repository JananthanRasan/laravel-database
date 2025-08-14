@extends('layouts.master')
@section('title', 'Register')

@push('styles')
    <style>
        #form {
            background-color: rgb(161, 194, 205);
            border-radius: 15px;
        }

        #input {
            border-radius: 15px;
            background-color: rgb(224, 236, 240);
        }
    </style>
@endpush

@section('content')
<div class="container">
    <form action="{{ route('register') }}" method="post" class="container mt-3 mb-4" id="form">
        @csrf
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-5 mb-5" id="input">
                <h2 class="text-center mb-4">Register</h2>
                <table width="100%">
                    <tr>
                        <td width="40%"><label for="name" class="col-form-label mb-2">Name</label></td>
                        <td><input type="text" name="name" id="name" class="form-control mb-2" required autocomplete="name" autofocus></td>
                    </tr>
                    <tr>
                        <td><label for="email" class="col-form-label mb-2">Email</label></td>
                        <td><input type="email" name="email" id="email" class="form-control mb-2" required autocomplete="email" autofocus></td>
                    </tr>
                    <tr>
                        <td><label for="password" class="col-form-label mb-2">Password</label></td>
                        <td><input type="password" name="password" id="password" class="form-control mb-2" required autocomplete="password" autofocus></td>
                    </tr>
                    <tr>
                        <td><label for="confirm_password" class="col-form-label">Confirm Password</label></td>
                        <td><input type="password" name="confirm_password" id="confirm_password" class="form-control" required autocomplete="password" autofocus></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/login" class="btn btn-secondary mt-4">Login Here</a>
                        </td>
                        <td>
                            <input type="reset" value="Reset" class="btn bg-warning mt-4 mr-3">
                            <input type="submit" value="Register" class="btn bg-success mt-4">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>
@endsection
