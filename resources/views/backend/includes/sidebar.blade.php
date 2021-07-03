<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/dashboard'))
                }}" href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link {{active_class(Route::is('admin/jobgroup'))}}" href="{{ route('admin.jobgroup.index') }}">
                    <i class="nav-icon fas fa-user-friends"></i>                    
                    Job Group
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{active_class(Route::is('admin/team'))}}" href="{{ route('admin.team.index') }}">
                    <i class="nav-icon fas fa-users"></i>                 
                    Team
                </a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link {{active_class(Route::is('admin/tenant'))}}" href="{{ route('admin.tenant.index') }}">
                    <i class="nav-icon fas fa-building"></i>       
                    Location
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{active_class(Route::is('admin/tenants'))}}" href="{{ route('admin.tenants.index') }}">
                    <i class="nav-icon fas fa-store"></i>           
                    Tenants
                </a>
            </li> -->
                <li class="nav-item nav-dropdown ">
                    <a class="nav-link nav-dropdown-toggle " href="#">
                        <i class="nav-icon fas fa-users-cog"></i>
                        About Us
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/jobgroup'))}}" href="{{ route('admin.jobgroup.index') }}">
                                <!-- <i class="nav-icon fas fa-user-friends"></i>                     -->
                                Job Group
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/team'))}}" href="{{ route('admin.team.index') }}">
                                <!-- <i class="nav-icon fas fa-users"></i>                  -->
                                Team
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item nav-dropdown ">
                    <a class="nav-link nav-dropdown-toggle " href="#">
                        <i class="nav-icon fas fa-building"></i>
                        Tenants and Cuisine
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/tenant'))}}" href="{{ route('admin.tenant.index') }}">
                                <!-- <i class="nav-icon fas fa-building"></i>        -->
                                Location
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/tenants'))}}" href="{{ route('admin.tenants.index') }}">
                                <!-- <i class="nav-icon fas fa-store"></i>            -->
                                Tenants
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-dropdown ">
                    <a class="nav-link nav-dropdown-toggle " href="#">
                        <i class="nav-icon fab fa-elementor"></i>
                        What's On
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/feature'))}}" href="{{ route('admin.feature.index') }}">                            
                                Feature Events
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/promotion'))}}" href="{{ route('admin.promotion.index') }}">                               
                                Promotions
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/voucher'))}}" href="{{ route('admin.voucher.index') }}">                           
                                Vouchers
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-dropdown ">
                    <a class="nav-link nav-dropdown-toggle " href="#">
                        <i class="nav-icon far fa-newspaper"></i>
                        Media
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/corporatenews'))}}" href="{{ route('admin.corporatenews.index') }}">                            
                                Corporate News
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/tenantnews'))}}" href="{{ route('admin.tenantnews.index') }}">                            
                                Tenants News
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/video'))}}" href="{{ route('admin.video.index') }}">                            
                                Video
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{active_class(Route::is('admin/social'))}}" href="{{ route('admin.social.index') }}">                            
                                Social Responsibility
                            </a>
                        </li>
                        

                    </ul>
                </li>





            @if ($logged_in_user->isAdmin())
                <li class="nav-title">
                    @lang('menus.backend.sidebar.system')
                </li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/auth*'), 'open')
                }}">
                    <a class="nav-link nav-dropdown-toggle {{
                        active_class(Route::is('admin/auth*'))
                    }}" href="#">
                        <i class="nav-icon far fa-user"></i>
                        @lang('menus.backend.access.title')

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Route::is('admin/auth/user*'))
                            }}" href="{{ route('admin.auth.user.index') }}">
                                @lang('labels.backend.access.users.management')

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Route::is('admin/auth/role*'))
                            }}" href="{{ route('admin.auth.role.index') }}">
                                @lang('labels.backend.access.roles.management')
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/log-viewer*'), 'open')
                }}">
                        <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/log-viewer*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-list"></i> @lang('menus.backend.log-viewer.main')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer'))
                        }}" href="{{ route('log-viewer::dashboard') }}">
                                @lang('menus.backend.log-viewer.dashboard')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer/logs*'))
                        }}" href="{{ route('log-viewer::logs.list') }}">
                                @lang('menus.backend.log-viewer.logs')
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->
