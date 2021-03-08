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
            <!-- <?php if(Route::has('admin.posts')): ?>
                <li class="<?php echo e((Request::routeIs('admin.posts') || Request::routeIs('posts.create') || Request::routeIs('editpost')) ? 'active' : null); ?> ">
                    <a href="<?php echo e(route('admin.posts')); ?>">
                        <i class="nc-icon nc-paper"></i>
                        <p>
                            <?php echo trans('admin.drawer-nav.posts'); ?>

                        </p>
                    </a>
                </li>
            <?php endif; ?> -->
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
<?php /**PATH /var/www/html/sbs/resources/views/admin/partials/drawer-nav.blade.php ENDPATH**/ ?>