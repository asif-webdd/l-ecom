@extends('admin.inc.App')

@section('title', 'User Profile')

@section('root-content')
    <div class="row pt-2 pb-2 py-4 align-items-center">
        <div class="col-sm-9">
            <h4 class="page-title mb-0">@yield('title')</h4>
        </div>
        <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <a href="{{ route('staff.users.index') }}" class="btn btn-primary waves-effect waves-light"><i class="fa fa-user-plus mr-1"></i> Manage Users</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-4">
            <div class="card profile-card-2">
                <div class="card-img-block">
                    <img class="img-fluid" src="{{ asset('uploads/users/' . auth()->user()->cover_image) }}" alt="Card image cap">
                </div>
                <div class="card-body pt-5">
                    <img src="{{ asset('uploads/users/' . auth()->user()->image) }}" alt="profile-image" class="profile">
                    <h5 class="card-title">{{ auth()->user()->name }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="icon-block">
                        <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
                        <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
                        <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Messages</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                        </li>
                    </ul>
                    <div class="tab-content p-3">
                        <div class="tab-pane active" id="profile">
                            <h5 class="mb-3">@yield('title')</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Name</h6>
                                    <p>{{ auth()->user()->name }}</p>
                                    <h6>Role</h6>
                                    <p>Super Admin</p>
                                    <h6>Email</h6>
                                    <p>{{ auth()->user()->email }}</p>
                                    <h6>Mobile</h6>
                                    <p>{{ auth()->user()->mobile }}</p>
                                </div>
                                <div class="col-md-6">

                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="tab-pane" id="messages">
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <div class="alert-icon">
                                    <i class="icon-info"></i>
                                </div>
                                <div class="alert-message">
                                    <span><strong>Info!</strong> Lorem Ipsum is simply dummy text.</span>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros.
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="edit">

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('staff.users.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method("patch")
                                <input type="hidden" name="id" value="{{ base64_encode(Auth::user()->id) }}">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" value="{{ auth()->user()->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Address" value="{{ auth()->user()->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile Number" value="{{ auth()->user()->mobile }}">
                                </div>
                                <div class="form-group">
                                    <label for="user_role">Role</label>
                                    <select class="form-control valid" id="user_role" name="user_role" required=""
                                            aria-invalid="false">
                                        <option value="3">Select User Role</option>
                                        @foreach($roles  as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="password">Current Password</label>
                                    <input type="password" class="form-control" id="password" name="current_password" value="{{ auth()->user()->getAuthPassword() }}" placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input type="password" class="form-control" id="password" name="new_password" value="{{ auth()->user()->getAuthPassword() }}" placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                    <label for="password">Confirm New Password</label>
                                    <input type="password" class="form-control" id="password" name="confirm_password" value="{{ auth()->user()->getAuthPassword() }}" placeholder="Enter Password">
                                </div>
                                <div class="form-group user-photo mb-0">
                                    <label for="photo">Photo Upload</label>
                                    <input type="file" onchange="document.getElementById('UserImg').src = window.URL.createObjectURL(this.files[0])" class="form-control" id="photo" name="images">
                                </div>
                                <div class="form-group user-photo">
                                    <img width="80px;" id="UserImg" src="{{ asset('uploads/users/' . auth()->user()->image) }}" alt="">
                                </div>
                                <div class="form-group user-photo mb-0">
                                    <label for="cover_image">Cover Photo Upload</label>
                                    <input type="file" onchange="document.getElementById('UserCoverImg').src = window.URL.createObjectURL(this.files[0])" class="form-control" id="cover_image" name="cover_image">
                                </div>
                                <div class="form-group user-photo">
                                    <img width="80px;" id="UserCoverImg" src="{{ asset('uploads/users/' . auth()->user()->cover_image) }}" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="" class="d-block">Status</label>
                                    <label><input type="radio" value="active" {{ auth()->user()->status === 'active' ? 'checked':'' }} name="status"> Active</label>
                                    <label><input type="radio" value="inactive" {{ auth()->user()->status === 'inactive' ? 'checked':'' }} name="status"> Inactive</label>
                                </div>
                                <div class="form-group py-2">
                                    <div class="icheck-material-primary">
                                        <input type="checkbox" id="user-checkbox1" checked=""/>
                                        <label for="user-checkbox1">I Agree Terms & Conditions</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary px-5"><i class="icon-user"></i> Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
