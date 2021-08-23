@extends('admin.inc.App')

@section('title', 'Add New Users')

@section('root-content')
    <div class="row pt-2 pb-2 py-4 align-items-center">
        <div class="col-sm-9">
            <h4 class="page-title mb-0">Add New User</h4>
        </div>
        <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <a href="{{ route('staff.users.index') }}" class="btn btn-primary waves-effect waves-light"><i
                        class="fa fa-list-alt mr-1"></i> Manage Users</a>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">User Details</div>
                    <hr>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                    <form method="POST" action="{{ route('staff.users.register') }}" class="create-form" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="Enter Your Email Address">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="tel" class="form-control" id="mobile" name="mobile"
                                   placeholder="Enter Your Mobile Number">
                        </div>
                        {{--<div class="form-group">
                            <label for="user_role">Role</label>
                            <select class="form-control valid" id="user_role" name="user_role" required=""
                                    aria-invalid="false">
                                <option value="3">Select User Role</option>
                                @foreach($roles  as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>--}}
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <div class="position-relative has-icon-right">
                                <input type="password" id="confirm_password" name="password_confirmation"
                                       class="form-control input-shadow" placeholder="Confirm Password">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>
                        {{--<div class="form-group user-photo mb-0">
                            <label for="image">Photo Upload</label>
                            <input type="file" onchange="document.getElementById('UserImg').src = window.URL.createObjectURL(this.files[0])" class="form-control" id="image" name="image">
                        </div>
                        <div class="form-group user-photo">
                            <img width="80px;" id="UserImg" src="" alt="">
                        </div>
                        <div class="form-group user-photo mb-0">
                            <label for="cover_image">Cover Photo Upload</label>
                            <input type="file" onchange="document.getElementById('UserCoverImg').src = window.URL.createObjectURL(this.files[0])" class="form-control" id="cover_image" name="cover_image">
                        </div>
                        <div class="form-group user-photo">
                            <img width="100px;" id="UserCoverImg" src="" alt="">
                        </div>--}}
                        <div class="form-group">
                            <label for="" class="d-block">Status</label>
                            <label><input type="radio" value="active"
                                          {{ old('status') === 'active' ? 'checked':'' }} name="status"> Active</label>
                            <label><input type="radio" value="inactive"
                                          {{ old('status') === 'inactive' ? 'checked':'' }} name="status">
                                Inactive</label>
                        </div>
                        <div class="form-group">
                            <label for="" class="d-block">Permission</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="icheck-material-primary">
                                        <input type="checkbox" id="checkAll">
                                        <label for="checkAll">Check All</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach(permissions() as $key => $value)
                                <div class="col-md-3">
                                    <div class="icheck-material-primary">
                                        <input type="checkbox" class="item" value="{{ $key }}" id="primary{{ $key }}" name="permission[]">
                                        <label for="primary{{ $key }}">{{ $value }}</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary px-5"><i class="icon-user"></i> Add User
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
