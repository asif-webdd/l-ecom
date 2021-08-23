<div id="sidebar-wrapper" class="bg-theme bg-theme2" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{ asset('assets/admin/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">L-eCom Admin</h5>
        </a>
    </div>
    <div class="user-details">
        <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
            <div class="avatar"><img class="mr-3 side-user-img" src="{{ asset('uploads/users/31.jpg') }}" alt="user avatar"></div>
            <div class="media-body">
                <h6 class="side-user-name">{{ Auth::user()->name }}</h6>
            </div>
        </div>
        <div id="user-dropdown" class="collapse">
            <ul class="user-setting-menu">
                <li><a href="{{ route('staff.users.profile', Auth::user()->id) }}"><i class="icon-user"></i>  My Profile</a></li>
                <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
                <li><a href="javaScript:void();" onclick="event.preventDefault(); document.getElementById('LogoutForm').submit()"><i class="icon-power"></i> Logout</a></li>
                <form id="LogoutForm" action="{{ route('staff.users.logout') }}" method="POST">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        @if(is_permitted('Dashboard', true))
        <li class="{{ ActiveMenu('staff.dashboard') }}"><a href="{{ route('staff.dashboard')  }}" class="waves-effect"><i class="zmdi zmdi-view-dashboard text-info"></i> <span>Dashboard</span></a></li>
        @endif

        @if(is_permitted('users', true))
        <li class="{{ ActivePrefix('staff/users') }}">
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-accounts"></i> <span>Users</span><i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li class="{{ ActiveMenu('staff.users.index') }}"><a href="{{ route('staff.users.index') }}"><i class="zmdi zmdi-long-arrow-right"></i> Users</a></li>
            </ul>
        </li>
        @endif
        {{--<li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="zmdi zmdi-email"></i>
                <span>Mailbox</span>
                <small class="badge float-right badge-warning">12</small>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="mail-inbox.html"><i class="zmdi zmdi-long-arrow-right"></i> Inbox</a></li>
                <li><a href="mail-compose.html"><i class="zmdi zmdi-long-arrow-right"></i> Compose</a></li>
                <li><a href="mail-read.html"><i class="zmdi zmdi-long-arrow-right"></i> Read Mail</a></li>
            </ul>
        </li>--}}

    </ul>

</div>
