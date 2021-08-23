@extends('admin.inc.App')

@section('title', 'Manage Users')

@section('root-content')
    <div class="row pt-2 pb-2 py-4 align-items-center">
        <div class="col-sm-9">
            <h4 class="page-title mb-0">Manage Users</h4>
        </div>
        <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <a href="{{ route('staff.users.create') }}" class="btn btn-primary waves-effect waves-light"><i class="fa fa-user-plus mr-1"></i> Add New User</a>
            </div>
        </div>
    </div>

    <x-alert/>

    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header border-0">All Users</div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>
                                    {{--<span class="badge badge-{{ role_color($user->role_id) }}">{{ $user->role->name }}</span>--}}
                                </td>
                                <td>
                                    <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                </td>
                                <td>
                                    {{--<img alt="Image placeholder" src="{{ asset('assets/admin/images/products/01.png') }}" class="product-img">--}}
                                    <img width="50px;" src="{{ asset('uploads/users/'. $user->image) }}" alt="">
                                </td>
                                <td>
                                    <input type="checkbox" id="ChangeStatus" data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Inactive" data-toggle="toggle" data-size="small" data-id="{{ $user->id }}" {{ $user->status =='active' ? 'checked':'' }}>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('staff.users.profile', $user->id) }}" class="btn btn-success waves-effect waves-light"><i class="fa fa-eye"></i></a>
                                        {{--<form action="{{ route('staff.users.profile', $user->id) }}" method="post">
                                            @csrf
                                            @method('get')
                                            <button type="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-eye"></i></button>
                                        </form>--}}
                                    </div>
                                    <div class="btn-group">
                                        <a href="{{ route('staff.users.edit', $user->id) }}" class="btn btn-dark waves-effect waves-light"> <i class="fa fa-pencil"></i> </a>
                                    </div>
                                    <div class="btn-group ">
                                        <a href="{{ route('staff.users.destroy', $user->id) }}" class="remove-item btn btn-danger waves-effect waves-light"> <i class="fa fa-trash"></i> </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('JS')
    <script>
        $(document).on('change', '#ChangeStatus', function (event){
            const id = $(this).data('id');
            if (this.checked){
                var status = "active";
            }else {
                var status = "inactive";
            }
            $('#pageloader-overlay').show();

            $.ajax({
                url : "{{ route('staff.users.Status') }}",
                method: "post",
                data: {id:id, status:status},
                success: function (data){
                    console.log(data)
                    $('#pageloader-overlay').hide();
                }
            })
        });
    </script>
@endsection
