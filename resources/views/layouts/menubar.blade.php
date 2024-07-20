<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu ">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('') }}/assets/images/logo-sm.png" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('') }}/assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->

        <a href='{{ route('home') }}' class='logo logo-light'>
            <span class='logo-sm'>
                <img src='{{ asset('') }}/assets/images/logo-sm.png' alt='' height='50'>
            </span>
            <span class='logo-lg p'>
                {{-- <img style = 'height:60px;' src = '{{ asset('') }}/assets/images/logo-no-background.png'
                    alt = '' height = '37'> --}}
                    <h3 class="text-white fw-bold mt-4 border border-3 px-4 py-3 border-white rounded-pill">GoaStar</h3>

            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <!-- Home Menu -->
                <li class='nav-item'>
                    <a id='menu-home' class='nav-link menu-link' href='{{ route('home') }}'>
                        <i class='ri-home-fill'></i> <span data-key='t-authentication'>Home</span>
                    </a>
                </li>

                <li class='nav-item'>
                    <a id='menu-home' class='nav-link menu-link' href='{{ route('user.create') }}'>
                        <i class='ri-team-fill'></i> <span data-key='t-authentication'>Users</span>
                    </a>
                </li>



                <!-- Masters Menu -->
                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarApps">
                        <i class='ri-team-fill'></i> <span data-key="t-apps">Users</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('user.create') }}" class="nav-link" data-key="t-calendar">Add User</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('user.index') }}" class="nav-link" data-key="t-chat">Manage All
                                    Users</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts3" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLayouts3">
                        <i class='ri-gamepad-fill'></i> <span data-key="t-apps">Games</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts3">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('game.index') }}" class="nav-link" data-key="t-calendar">All Games</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('game.manage') }}" class="nav-link" data-key="t-chat">Manage All
                                    Games</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class='nav-item'>
                    <a id='menu-home' class='nav-link menu-link' href='{{ route('dealer.create') }}'>
                        <i class='ri ri-user-add-fill'></i> <span data-key='t-authentication'>Dealers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts5" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLayouts5">
                        <i class='ri-file-text-fill'></i>  <span data-key="t-layouts">Results</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts5">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('results.create') }}" class="nav-link" data-key="t-two-column">Set
                                    Results</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('results.index') }}" class="nav-link"
                                    data-key="t-two-column">View All Results</a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- <li class='nav-item'>
                    <a id='menu-home' class='nav-link menu-link' href='{{ route('results.index') }}'>
                        <i class='ri-file-list-fill'></i> <span data-key='t-authentication'>Results</span>
                    </a>
                </li> --}}

                <li class='nav-item'>
                    <a id='menu-home' class='nav-link menu-link' href='{{ route('recharge.create') }}'>
                        <i class='ri-hand-coin-fill'></i> <span data-key='t-authentication'>Recharges</span>
                    </a>
                </li>


                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts2" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarLayouts2">
                        <i class='ri-user-3-fill'></i> <span data-key="t-layouts">Dealers</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLayouts2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('dealer.create') }}" class="nav-link" data-key="t-two-column">Add
                                    Dealer</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dealer.index') }}" class="nav-link"
                                    data-key="t-two-column">View All Dealers</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                <!-- Reports Menu -->
                <li class='nav-item'>
                    <a id='menu-masters4' class='nav-link menu-link' href='#' data-bs-toggle='collapse'
                        data-bs-target='#masters4'>
                        <i class='ri-settings-3-fill'></i>
                        <span>Settings</span>
                    </a>
                    <div class='collapse menu-dropdown' id='masters4'>
                        <ul class='nav nav-sm flex-column'>
                            <li class="nav-item">
                                <a href="{{ route('company.edit') }}" class="nav-link" data-key="t-calendar">Company
                                    Profile</a>
                            </li>
                            <li class='nav-item'>
                                <a id='menu-reports' class='nav-link' href='{{ route('change.password') }}'>
                                    Change Password
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
