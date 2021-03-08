<div class="sidebar-wrapper">
    <ul class="nav">

        @if (Route::has('admin'))
            <li class="{{ Request::is('admin') ? 'active' : null }} ">
                <a href="{{ route('admin') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
        @endif

    
        @if(Auth::check() && Auth::user()->hasPermission('perms.admin'))
            @if (Route::has('showtags'))
                <li class="{{ (Request::routeIs('dashboarddata')|| Request::routeIs('dashboarddata.edit') || Request::routeIs('updatedata')) ? 'active' : null }} ">
                    <a href="{{ route('dashboarddata') }}">
                        <i class="nc-icon nc-simple-add"></i>
                        <p>
                            Add Dashboard Data
                        </p>
                    </a>
                </li>
            @endif
        @endif
        @if(Auth::check() && Auth::user()->hasPermission('perms.writer'))
            <!-- @if (Route::has('admin.posts'))
                <li class="{{ (Request::routeIs('admin.posts') || Request::routeIs('posts.create') || Request::routeIs('editpost')) ? 'active' : null }} ">
                    <a href="{{ route('admin.posts') }}">
                        <i class="nc-icon nc-paper"></i>
                        <p>
                            {!! trans('admin.drawer-nav.posts') !!}
                        </p>
                    </a>
                </li>
            @endif -->
        @endif

       
        @if(Auth::check() && Auth::user()->hasPermission('perms.admin'))
            @if (Route::has('showtags'))
                <li class="{{ (Request::routeIs('band') || Request::routeIs('createband') || Request::routeIs('edittag')) ? 'active' : null }} ">
                    <a href="{{ route('band') }}">
                        <i class="nc-icon nc-tag-content"></i>
                        <p>
                           Band
                        </p>
                    </a>
                </li>
            @endif
        @endif
        @if(Auth::check() && Auth::user()->hasPermission('perms.admin'))
            @if (Route::has('showtags'))
                <li class="{{ (Request::routeIs('skill') || Request::routeIs('createskill') || Request::routeIs('editskill')) ? 'active' : null }} ">
                    <a href="{{ route('skill') }}">
                        <i class="nc-icon nc-tag-content"></i>
                        <p>
                          Skill
                        </p>
                    </a>
                </li>
            @endif
        @endif
        @if(Auth::check() && Auth::user()->hasPermission('perms.admin'))
            @if (Route::has('showtags'))
                <li class="{{ (Request::routeIs('division') || Request::routeIs('createdivision') || Request::routeIs('editdivision')) ? 'active' : null }} ">
                    <a href="{{ route('division') }}">
                        <i class="nc-icon nc-tag-content"></i>
                        <p>
                          Division
                        </p>
                    </a>
                </li>
            @endif
        @endif

        @if(Auth::check() && Auth::user()->hasPermission('perms.moderator'))
            @if (Route::has('admin-uploads'))
                <li class="{{ Request::routeIs('admin-uploads') ? 'active' : null }} ">
                    <a href="{{ route('admin-uploads') }}">
                        <i class="nc-icon nc-album-2"></i>
                        <p>
                            {!! trans('admin.drawer-nav.file-manager') !!}
                        </p>
                    </a>
                </li>
            @endif

            


        @endif

        @if(Auth::check() && Auth::user()->hasPermission('perms.super.admin'))
            @if (Route::has('users'))
                <li class="{{ (Request::routeIs('users') || Request::routeIs('users.create') || Request::routeIs('users.show') || Request::routeIs('users.edit')) ? 'active' : null }} ">
                    <a href="{{ route('users') }}">
                        <i class="nc-icon nc-single-02"></i>
                        <p>
                            {!! trans('admin.drawer-nav.users') !!}
                        </p>
                    </a>
                </li>
            @endif

            @if (Route::has('admin/roles'))
                <li class="{{ Request::is('admin/roles') ? 'active' : null }} ">
                    <a href="{{ route('admin/roles') }}">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>
                            {!! trans('admin.drawer-nav.roles') !!}
                        </p>
                    </a>
                </li>
            @endif

            @if (Route::has('laravelPhpInfo::phpinfo'))
                <li class="{{ Request::is('phpinfo') ? 'active' : null }} ">
                    <a href="{{ route('laravelPhpInfo::phpinfo') }}">
                        <i class="nc-icon nc-alert-circle-i"></i>
                        <p>
                            {!! trans('admin.drawer-nav.phpinfo') !!}
                        </p>
                    </a>
                </li>
            @endif

          

            @if (Route::has('admin/settings'))
                <li class="{{ Request::is('admin/settings') ? 'active' : null }} ">
                    <a href="{{ route('admin/settings') }}">
                        <i class="nc-icon nc-single-02"></i>
                        <p>
                            {!! trans('admin.drawer-nav.settings') !!}
                        </p>
                    </a>
                </li>
            @endif
        @endif

    </ul>
</div>
