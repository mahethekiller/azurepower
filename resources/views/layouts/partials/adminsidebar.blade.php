<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar pc-sidebar-custom">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="#" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img src="{{ asset('assets/images/logo_2.png') }}" class="img-fluid logo-lg" alt="logo">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="{{ route('admin.dashboard') }}" class="pc-link">
                        <span class="pc-micon"><img src="{{ asset('assets/images/dashboard.png') }}" /></span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#" class="pc-link">
                        <span class="pc-micon"><img src="{{ asset('assets/images/edit.png') }}" /></span>
                        <span class="pc-mtext">Investors</span>
                        <span class="pc-arrow" style="float:right;"><i class="fa fa-chevron-down"></i></span>
                    </a>

                    <ul class="pc-submenu">
                        <li class="pc-item">
                            <a href="{{ route('admin.investor.events.index') }}" class="pc-link">
                                <span class="pc-mtext">Events & Presentation</span>
                            </a>
                        </li>
                        {{-- Dynamic Document Type Links --}}
                        @foreach ($documentTypes as $type)
                            <li class="pc-item {{ request()->is('documents/type/' . $type->id) ? 'active' : '' }}">
                                <a href="{{ route('documents.type', $type->id) }}" class="pc-link">
                                    <span class="pc-mtext">{{ $type->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="pc-item">
                    <a href="{{ route('admin.profile.edit') }}" class="pc-link">
                        <span class="pc-micon"><img src="{{ asset('assets/images/user.png') }}" /></span>
                        <span class="pc-mtext">My Profile</span>
                    </a>
                </li>


                @if (auth()->user()->hasRole('admin'))
                    <li class="pc-item">
                        <a href="{{ route('admin.users.index') }}" class="pc-link">
                            <span class="pc-micon"><img src="{{ asset('assets/images/user.png') }}" /></span>
                            <span class="pc-mtext">User Management</span>
                        </a>
                    </li>
                @endif


            </ul>
        </div>
    </div>
</nav>
