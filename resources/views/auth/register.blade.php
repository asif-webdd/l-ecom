<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Bulona - Bootstrap Admin Dashboard Template</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/admin/images/favicon.ico') }}" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{ asset('assets/admin/css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{ asset('assets/admin/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Custom Style-->
    <link href="{{ asset('assets/admin/css/app-style.css') }}" rel="stylesheet"/>

</head>

<body>


<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
<!-- end loader -->

<!-- Start wrapper-->
<div id="wrapper">

    <div class="card card-authentication1 mx-auto my-4">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="{{ asset('assets/admin/images/logo-icon.png') }}" alt="logo icon">
                </div>
                <div class="card-title text-uppercase text-center py-3">Sign Up</div>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('staff.register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control input-shadow" placeholder="Enter Your Name">
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email ID</label>
                        <div class="position-relative has-icon-right">
                            <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control input-shadow" placeholder="Enter Your Email ID">
                            <div class="form-control-position">
                                <i class="icon-envelope-open"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="mobile" name="mobile" value="{{ old('mobile') }}" placeholder="Enter Your Mobile Number">
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <div class="position-relative has-icon-right">
                            <input type="password" id="password" name="password" value="{{ old('password') }}" class="form-control input-shadow" placeholder="Choose Password">
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password" class="sr-only">Confirm Password</label>
                        <div class="position-relative has-icon-right">
                            <input type="password" id="confirm_password" name="password_confirmation" value="{{ old('confirm_password') }}" class="form-control input-shadow" placeholder="Choose Password">
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group user-photo mb-0">
                        <label for="photo">Photo Upload</label>
                        <input type="file" onchange="document.getElementById('UserImg').src = window.URL.createObjectURL(this.files[0])" class="form-control" id="photo" name="photo">
                    </div>
                    <div class="form-group user-photo">
                        <img width="80px;" id="UserImg" src="" alt="">
                    </div>
                    <div class="form-group">
                        <label for="" class="d-block">Status</label>
                        <label><input type="radio" value="active" {{ old('status') === 'active' ? 'checked':'' }} name="status"> Active</label>
                        <label><input type="radio" value="inactive" {{ old('status') === 'inactive' ? 'checked':'' }} name="status"> Inactive</label>
                    </div>

                    <div class="form-group">
                        <div class="icheck-material-primary">
                            <input type="checkbox" id="user-checkbox" checked="" />
                            <label for="user-checkbox">I Agree With Terms & Conditions</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Sign Up</button>
                    <div class="text-center mt-3">Sign Up With</div>

                    <div class="form-row mt-4">
                        <div class="form-group mb-0 col-6">
                            <button type="button" class="btn bg-facebook text-white btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
                        </div>
                        <div class="form-group mb-0 col-6 text-right">
                            <button type="button" class="btn bg-twitter text-white btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="card-footer text-center py-3">
            <p class="text-dark mb-0">Already have an account? <a href="{{ route('staff.login') }}"> Sign In here</a></p>
        </div>
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->



    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>

    <!-- sidebar-menu js -->
    <script src="{{ asset('assets/admin/js/sidebar-menu.js') }}"></script>

    <!-- Custom scripts -->
    <script src="{{ asset('assets/admin/js/app-script.js') }}"></script>

</body>

</html>






{{--
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('staff.register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('staff.login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
--}}
