<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <span class="navbar-brand">
                <?php echo $__env->yieldContent('header_title'); ?>
            </span>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">

            <!--
            <form>
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="nc-icon nc-zoom-split"></i>
                        </div>
                    </div>
                </div>
            </form>
            -->

            <ul class="navbar-nav">

                <?php if(Auth::check() && Auth::user()->hasPermission('perms.writer')): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('posts.create')); ?>" class="nav-link btn-magnify" data-toggle="tooltip" data-placement="bottom" title="<?php echo trans('tooltips.post.create'); ?>">
                            <i class="nc-icon nc-simple-add" aria-hidden="true"></i>
                            <p>
                                <span class="d-lg-none d-md-block">
                                    <?php echo e(trans('admin.buttons.create')); ?>

                                </span>
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item btn-rotate dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nc-icon nc-circle-10" aria-hidden="true"></i>
                        <p>
                            <span class="d-lg-none d-md-block">

                                <?php echo e(trans('admin.navbar.title')); ?>

                            </span>
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <?php echo trans('larablog.nav.logout'); ?>

                            <i class="nc-icon nc-button-power pull-right mt-1" aria-hidden="true"></i>
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>

                <!--
                <li class="nav-item">
                    <a class="nav-link btn-rotate" href="#pablo">
                        <i class="nc-icon nc-settings-gear-65"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Account</span>
                        </p>
                    </a>
                </li>
                -->

            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/partials/navbar.blade.php ENDPATH**/ ?>