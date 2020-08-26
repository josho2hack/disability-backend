        <!-- HEADER Content -->
        <div id="header">
            <header class="clearfix">
                <!-- Branding -->
                <div class="branding">
                    <a class="brand" href="{{ url('/') }}">
                        <span>ONDE</span>
                    </a>
                    <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <!-- Branding end -->

                <!-- Left-side navigation -->
                <ul class="nav-left pull-left list-unstyled list-inline">
                    <li class="leftmenu-collapse">
                        <a role="button" tabindex="0" class="collapse-leftmenu">
                            <i class="fa fa-outdent"></i>
                        </a>
                    </li>
                    {{-- <li class="dropdown leftmenu-collapse">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-language"></i>
                        </a>
                        <div class="dropdown-menu pull-left panel-default pt-0 pb-0" role="menu">
                            <ul class="list-group mb-0">
                                <li class="list-group-item">
                                    <a href="javascript:void(0);" class="p-0 m-0">English</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javascript:void(0);" class="p-0 m-0">Spanish</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javascript:void(0);" class="p-0 m-0">Chinese</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javascript:void(0);" class="p-0 m-0">Arabic</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown leftmenu-collapse">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-plus mr-5"></i>New
                        </a>
                        <div class="dropdown-menu pull-left panel panel-default" role="menu">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-briefcase"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">New Campaign</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-area-chart"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">Generate Report</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">Add New User</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-file-text"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">Create Page</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                </ul>
                <!-- Left-side navigation end -->
                {{-- <div class="search" id="main-search">
                    <input type="text" class="form-control underline-input" placeholder="Explore Falcon...">
                </div> --}}
                <!-- Search end -->


                <!-- Right-side navigation -->
                <ul class="nav-right pull-right list-inline">
                    {{-- <li class="dropdown users">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-th"></i>
                        </a>
                        <div class="dropdown-menu pull-right panel panel-default" role="menu">
                            <ul class="app-sortcut">
                                <li>
                                    <a href="#" class="connection-item">
                                        <i class="fa fa-umbrella"></i>
                                        <span class="block">Weather</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-widgets.html" class="connection-item">
                                        <i class="fa fa-object-ungroup"></i>
                                        <span class="block">Widget</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="calendar.html" class="connection-item">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span class="block">calendar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="maps-google.html" class="connection-item">
                                        <i class="fa fa-map-o"></i>
                                        <span class="block">map</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html" class="connection-item">
                                        <i class="fa fa-comments-o"></i>
                                        <span class="block">chat</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="connection-item">
                                        <i class="fa fa-book"></i>
                                        <span class="block">contact</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                    <li class="dropdown messages">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                            <div class="notify">
                                <span class="heartbit"></span>
                                <span class="point"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu pull-right panel panel-default" role="menu">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object thumb thumb-sm">
                                            <img src="assets/images/pi-avatar.jpg" alt=""> </span>
                                        <div class="media-body">
                                            <span class="block">Lucas sent you a message</span>
                                            <small class="text-muted">9 minutes ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object  thumb thumb-sm">
                                            <img src="assets/images/Jane-avatar.jpg" alt=""> </span>
                                        <div class="media-body">
                                            <span class="block">Jane sent you a message</span>
                                            <small class="text-muted">27 minutes ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object  thumb thumb-sm">
                                            <img src="assets/images/random-avatar1.jpg" alt=""> </span>
                                        <div class="media-body">
                                            <span class="block">Lee sent you a message</span>
                                            <small class="text-muted">2 hour ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object  thumb thumb-sm">
                                            <img src="assets/images/random-avatar3.jpg" alt=""> </span>
                                        <div class="media-body">
                                            <span class="block">Rihtik sent you a message</span>
                                            <small class="text-muted">8 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="panel-footer">
                                <a role="button" tabindex="0">Show all messages
                                    <i class="pull-right fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown notifications">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <div class="notify">
                                <span class="heartbit"></span>
                                <span class="point"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu pull-right panel panel-default">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-ban"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">User Lucas cancelled account</span>
                                            <small class="text-muted">12 minutes ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-spotify"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">2 voice mails</span>
                                            <small class="text-muted">Neque porro quisquam est</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-whatsapp"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">8 voice messanger</span>
                                            <small class="text-muted">8 texts</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="panel-footer">
                                <a role="button" tabindex="0">Show all notifications
                                    <i class="fa fa-angle-right pull-right"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="dropdown users">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-sign-in"></i> {{ __('เข้าสู่ระบบ') }}
                            </a>
                            <div class="dropdown-menu pull-right panel panel-default" role="menu">
                                <ul class="app-sortcut">
                                    <li>
                                        <a href="{{ route('login') }}" class="connection-item" role="button" tabindex="0">
                                            <i class="fa fa-umbrella"></i>
                                            <span class="block">ประชาชนทั่วไป</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}" class="connection-item" role="button" tabindex="0">
                                            <i class="fa fa-object-ungroup"></i>
                                            <span class="block">ผู้ตรวจสอบ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}" class="connection-item" role="button" tabindex="0">
                                            <i class="fa fa-calendar-check-o"></i>
                                            <span class="block">ผู้อนุมัติ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('login') }}" class="connection-item" role="button" tabindex="0">
                                            <i class="fa fa-map-o"></i>
                                            <span class="block">ผู้ดูแลระบบ</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a class="nav-link" href="{{ route('register') }}" role="button"
                                    tabindex="0"><i class="fa fa-key"></i> {{ __('ลงทะเบียนเข้าใช้งาน') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="dropdown nav-profile">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="assets/images/profile-photo.jpg" alt="" class="0 size-30x30"> </a>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <div class="user-info">
                                        <div class="user-name">{{ Auth::user()->name }}</div>
                                        <div class="user-position online">Available</div>
                                    </div>
                                </li>
                                <li>
                                    <a href="profile.html" role="button" tabindex="0">
                                        <span class="label label-success pull-right">80%</span>
                                        <i class="fa fa-user"></i>Profile</a>
                                </li>
                                <li>
                                    <a role="button" tabindex="0">
                                        <span class="label label-info pull-right">new</span>
                                        <i class="fa fa-check"></i>Tasks</a>
                                </li>
                                <li>
                                    <a role="button" tabindex="0">
                                        <i class="fa fa-cog"></i>Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="locked.html" role="button" tabindex="0">
                                        <i class="fa fa-lock"></i>Lock</a>
                                </li>
                                <li>
                                    <div>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" role="button" tabindex="0">
                                            <i class="fa fa-sign-out"></i>{{ __('ออกจากระบบ') }}</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li class="toggle-right-leftmenu">
                            <a role="button" tabindex="0">
                                <i class="fa fa-align-left"></i>
                            </a>
                        </li>
                    @endguest
                </ul>
                <!-- Right-side navigation end -->
            </header>
        </div>
        <!--/ HEADER Content  -->
