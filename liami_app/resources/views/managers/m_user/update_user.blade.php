@extends('layouts.admin_master')

{{-- title --}}
@section('title')
    <title>
       Upadte User
    </title>
@endsection

{{-- css --}}
@section('css')
   <!-- Theme Style -->
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate2.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animation.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style2.css') }}">
   <!-- Font -->
   <link rel="stylesheet" href="{{ asset('assets/font/fonts.css') }}">
   <!-- Icon -->
   <link rel="stylesheet" href="{{ asset('assets/icon/style.css') }}">
   <!-- Favicon and Touch Icons  -->
   <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
   <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicon.png') }}">
@endsection

@section('css')
   <!-- Theme Style -->
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate2.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animation.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style2.css') }}">
   <!-- Font -->
   <link rel="stylesheet" href="{{ asset('assets/font/fonts.css') }}">
   <!-- Icon -->
   <link rel="stylesheet" href="{{ asset('assets/icon/style.css') }}">
   <!-- Favicon and Touch Icons  -->
   <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
   <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/favicon.png') }}">

@endsection

{{-- content --}}
@section('content')
<div id="wrapper">
    <div id="page">
        <div class="layout-wrap">
            <div class="section-content-right">
                <div class="main-content">
                    <div class="main-content-inner">
                        <div class="main-content-wrap">
                            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                <h3>Update User</h3>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('managers.m_user.update_user_action', $user->UserID) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="wg-box">
                                    <fieldset>
                                        <div class="body-title mb-10">Username <span class="tf-color-1">*</span></div>
                                        <input class="mb-10" type="text" name="Username" value="{{ old('Username', $user->Username) }}" required>
                                        <div class="text-tiny">Do not exceed 20 characters when entering the username.</div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="body-title mb-10">Password</div>
                                        <div class="password-wrapper">
                                            <input class="mb-10" type="password" name="Password" id="password" placeholder="Enter password">
                                            <button type="button" id="toggle-password" class="toggle-password"><i class="icon-eye"></i></button>
                                        </div>
                                        <div class="text-tiny">Leave blank to keep the current password.</div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="body-title mb-10">Confirm Password</div>
                                        <div class="password-wrapper">
                                            <input class="mb-10" type="password" name="Password_confirmation" id="password-confirmation" placeholder="Confirm password">
                                            <button type="button" id="toggle-confirm-password" class="toggle-password"><i class="icon-eye"></i></button>
                                        </div>
                                        <div class="text-tiny">Please confirm your password.</div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="body-title mb-10">Email <span class="tf-color-1">*</span></div>
                                        <input class="mb-10" type="email" name="Email" value="{{ old('Email', $user->Email) }}" required>
                                        <div class="text-tiny">Please enter a valid email address.</div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="body-title mb-10">Phone</div>
                                        <input class="mb-10" type="text" name="Phone" value="{{ old('Phone', $user->Phone) }}">
                                        <div class="text-tiny">Optional, up to 20 characters.</div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="body-title mb-10">Role <span class="tf-color-1">*</span></div>
                                        <select name="Role" required>
                                            <option value="Admin" {{ $user->Role == 'Admin' ? 'selected' : '' }}>Admin</option>
                                            <option value="Staff" {{ $user->Role == 'Staff' ? 'selected' : '' }}>Staff</option>
                                        </select>
                                        <div class="text-tiny">Select the role for the user.</div>
                                    </fieldset>

                                    <div class="cols gap10">
                                        <button class="tf-button w-full" type="submit">Save</button>
                                        <a href="{{ route('managers.m_user.manager_user') }}" class="tf-button style-1 w-full">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- script --}}
@section('script')
   <!-- Javascript -->
   <script src="{{ asset('assets/js2/jquery.min.js') }}"></script>
   <script src="{{ asset('assets/js2/bootstrap.min.js') }}"></script>
   <script src="{{ asset('assets/js2/bootstrap-select.min.js') }}"></script>
   <script src="{{ asset('assets/js2/zoom.js') }}"></script>
   <script src="{{ asset('assets/js2/switcher.js') }}"></script>
   <script src="{{ asset('assets/js2/theme-settings.js') }}"></script>
   <script src="{{ asset('assets/js2/main.js') }}"></script>
   <script src="{{ asset('assets/js2/custom.js') }}"></script>
@endsection
