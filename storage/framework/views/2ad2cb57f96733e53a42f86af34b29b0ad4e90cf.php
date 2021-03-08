<div class="sidebar-wrapper">
    <ul class="nav">

        <?php if(Route::has('admin')): ?>
            <li class="<?php echo e(Request::is('admin') ? 'active' : null); ?> ">
                <a href="<?php echo e(route('admin')); ?>">
                    <i class="nc-icon nc-bank"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>
        <?php endif; ?>

    <?php if(Auth::check() && Auth::user()->hasPermission('perms.admin')): ?>
            <?php if(Route::has('showtags')): ?>
                <li class="<?php echo e((Request::routeIs('dashboard')) ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('dashboard')); ?>">
                        <i class="nc-icon nc-chart-bar-32"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
            <?php endif; ?>
        <?php endif; ?>
        <?php if(Auth::check() && Auth::user()->hasPermission('perms.admin')): ?>
            <?php if(Route::has('showtags')): ?>
                <li class="<?php echo e((Request::routeIs('dashboarddata')|| Request::routeIs('dashboarddata.edit') || Request::routeIs('updatedata')) ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('dashboarddata')); ?>">
                        <i class="nc-icon nc-simple-add"></i>
                        <p>
                            Add Dashboard Data
                        </p>
                    </a>
                </li>
            <?php endif; ?>
        <?php endif; ?>
        <?php if(Auth::check() && Auth::user()->hasPermission('perms.writer')): ?>
            <?php if(Route::has('admin.posts')): ?>
                <li class="<?php echo e((Request::routeIs('admin.posts') || Request::routeIs('posts.create') || Request::routeIs('editpost')) ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('admin.posts')); ?>">
                        <i class="nc-icon nc-paper"></i>
                        <p>
                            <?php echo trans('admin.drawer-nav.posts'); ?>

                        </p>
                    </a>
                </li>
            <?php endif; ?>
        <?php endif; ?>

        <?php if(Auth::check() && Auth::user()->hasPermission('perms.admin')): ?>
            <?php if(Route::has('showtags')): ?>
                <li class="<?php echo e((Request::routeIs('createtag') || Request::routeIs('showtags') || Request::routeIs('edittag')) ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('showtags')); ?>">
                        <i class="nc-icon nc-tag-content"></i>
                        <p>
                            <?php echo trans('admin.drawer-nav.tags'); ?>

                        </p>
                    </a>
                </li>
            <?php endif; ?>
        <?php endif; ?>

        <?php if(Auth::check() && Auth::user()->hasPermission('perms.admin')): ?>
            <?php if(Route::has('showtags')): ?>
                <li class="<?php echo e((Request::routeIs('band') || Request::routeIs('createband') || Request::routeIs('edittag')) ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('band')); ?>">
                        <i class="nc-icon nc-tag-content"></i>
                        <p>
                           Band
                        </p>
                    </a>
                </li>
            <?php endif; ?>
        <?php endif; ?>
        <?php if(Auth::check() && Auth::user()->hasPermission('perms.admin')): ?>
            <?php if(Route::has('showtags')): ?>
                <li class="<?php echo e((Request::routeIs('skill') || Request::routeIs('createskill') || Request::routeIs('editskill')) ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('skill')); ?>">
                        <i class="nc-icon nc-tag-content"></i>
                        <p>
                          Skill
                        </p>
                    </a>
                </li>
            <?php endif; ?>
        <?php endif; ?>
        <?php if(Auth::check() && Auth::user()->hasPermission('perms.admin')): ?>
            <?php if(Route::has('showtags')): ?>
                <li class="<?php echo e((Request::routeIs('division') || Request::routeIs('createdivision') || Request::routeIs('editdivision')) ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('division')); ?>">
                        <i class="nc-icon nc-tag-content"></i>
                        <p>
                          Division
                        </p>
                    </a>
                </li>
            <?php endif; ?>
        <?php endif; ?>

        <?php if(Auth::check() && Auth::user()->hasPermission('perms.moderator')): ?>
            <?php if(Route::has('admin-uploads')): ?>
                <li class="<?php echo e(Request::routeIs('admin-uploads') ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('admin-uploads')); ?>">
                        <i class="nc-icon nc-album-2"></i>
                        <p>
                            <?php echo trans('admin.drawer-nav.file-manager'); ?>

                        </p>
                    </a>
                </li>
            <?php endif; ?>

            <?php if(Route::has('sitemap-admin')): ?>
                <li class="<?php echo e(Request::routeIs('sitemap-admin') ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('sitemap-admin')); ?>">
                        <i class="nc-icon nc-map-big"></i>
                        <p>
                            <?php echo trans('admin.drawer-nav.sitemap-admin'); ?>

                        </p>
                    </a>
                </li>
            <?php endif; ?>

            <?php if(Route::has('themes')): ?>
                <li class="<?php echo e(Request::routeIs('themes') || Request::routeIs('edittheme') || Request::routeIs('showtheme') || Request::routeIs('createtheme') ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('themes')); ?>">
                        <i class="nc-icon nc-palette"></i>
                        <p>
                            <?php echo trans('admin.drawer-nav.themes'); ?>

                        </p>
                    </a>
                </li>
            <?php endif; ?>

        <?php endif; ?>

        <?php if(Auth::check() && Auth::user()->hasPermission('perms.super.admin')): ?>
            <?php if(Route::has('users')): ?>
                <li class="<?php echo e((Request::routeIs('users') || Request::routeIs('users.create') || Request::routeIs('users.show') || Request::routeIs('users.edit')) ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('users')); ?>">
                        <i class="nc-icon nc-single-02"></i>
                        <p>
                            <?php echo trans('admin.drawer-nav.users'); ?>

                        </p>
                    </a>
                </li>
            <?php endif; ?>

            <?php if(Route::has('admin/roles')): ?>
                <li class="<?php echo e(Request::is('admin/roles') ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('admin/roles')); ?>">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>
                            <?php echo trans('admin.drawer-nav.roles'); ?>

                        </p>
                    </a>
                </li>
            <?php endif; ?>

            <?php if(Route::has('laravelPhpInfo::phpinfo')): ?>
                <li class="<?php echo e(Request::is('phpinfo') ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('laravelPhpInfo::phpinfo')); ?>">
                        <i class="nc-icon nc-alert-circle-i"></i>
                        <p>
                            <?php echo trans('admin.drawer-nav.phpinfo'); ?>

                        </p>
                    </a>
                </li>
            <?php endif; ?>

            <?php if(Route::has('activity')): ?>
                <li class="<?php echo e((Request::routeIs('activity') || Request::routeIs('clear-activity')) ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('activity')); ?>">
                        <i class="nc-icon nc-tap-01"></i>
                        <p>
                            <?php echo trans('admin.drawer-nav.activity'); ?>

                        </p>
                    </a>
                </li>
            <?php endif; ?>

            <?php if(Route::has('admin/settings')): ?>
                <li class="<?php echo e(Request::is('admin/settings') ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('admin/settings')); ?>">
                        <i class="nc-icon nc-single-02"></i>
                        <p>
                            <?php echo trans('admin.drawer-nav.settings'); ?>

                        </p>
                    </a>
                </li>
            <?php endif; ?>
        <?php endif; ?>

    </ul>
</div>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/partials/drawer-nav.blade.php ENDPATH**/ ?>