@extends('layouts.master')
@section('title', 'Login')

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
    <form action="{{ route('login') }}" method="post" class="container mt-3 mb-4" id="form">
        @csrf
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-5 mb-5" id="input">
                <h2 class="text-center mb-4">Login</h2>
                <table width="100%">
                    <tr>
                        <td width="35%"><label for="email" class="col-form-label mb-2">Email</label></td>
                        <td><input type="email" name="email" id="email" class="form-control mb-2" required autocomplete="email" autofocus></td>
                    </tr>
                    <tr>
                        <td><label for="password" class="col-form-label mb-2">Password</label></td>
                        <td><input type="text" name="password" id="password" class="form-control mb-2" required autocomplete="password" autofocus></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/" class="btn btn-secondary mt-4"> Back Home</a>
                        </td>
                        <td class="d-flex justify-content-between mt-4">
                            <input type="reset" value="Reset" class="btn bg-warning ml-4">
                            <input type="submit" value="Login" class="btn bg-success">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>
@endsection
