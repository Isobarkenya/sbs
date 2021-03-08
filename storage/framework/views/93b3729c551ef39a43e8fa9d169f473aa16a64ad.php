<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('Safaricom SBS')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_description'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_title'); ?>
    <?php echo e(trans('Safaricom SBS')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                <h5 class="card-title">
                    Hi <?php echo e(Auth::user()->name); ?> Welcome to SBS
                </h5>
                <p class="card-category">

                </p>
            </div>
            <hr>
            <div class="card-body ">
                <p>
                    <?php echo e(trans('admin.dashboard.welcome-access')); ?>

                    <strong>
                        <?php if (Auth::check() && Auth::user()->hasRole('super.admin', true)): ?>
                            <span class="badge badge-primary" style="margin-top:4px">
                                <?php echo trans('admin.access_levels.roles.super-admin'); ?>

                            </span>
                        <?php endif; ?>

                        <?php if (Auth::check() && Auth::user()->hasRole('admin', true)): ?>
                            <span class="badge badge-warning" style="margin-top:4px">
                                <?php echo trans('admin.access_levels.roles.admin'); ?>

                            </span>
                        <?php endif; ?>

                        <?php if (Auth::check() && Auth::user()->hasRole('moderator', true)): ?>
                            <span class="badge badge-info" style="margin-top:4px">
                                <?php echo trans('admin.access_levels.roles.moderator'); ?>

                            </span>
                        <?php endif; ?>

                        <?php if (Auth::check() && Auth::user()->hasRole('writer', true)): ?>
                            <span class="badge badge-dark" style="margin-top:4px">
                                <?php echo trans('admin.access_levels.roles.writer'); ?>

                            </span>
                        <?php endif; ?>

                        <?php if (Auth::check() && Auth::user()->hasRole('user', true)): ?>
                            <span class="badge badge-default" style="margin-top:4px">
                                <?php echo trans('admin.access_levels.roles.user'); ?>

                            </span>
                        <?php endif; ?>
                    </strong>
                </p>

                <p>
                    <?php echo trans_choice('admin.dashboard.access-level-string', Auth::User()->level()); ?>


                    <?php if (Auth::check() && Auth::user()->level() >= 5): ?>
                        <span class="badge badge-primary margin-half">5</span>
                    <?php endif; ?>

                    <?php if (Auth::check() && Auth::user()->level() >= 4): ?>
                        <span class="badge badge-info margin-half">4</span>
                    <?php endif; ?>

                    <?php if (Auth::check() && Auth::user()->level() >= 3): ?>
                        <span class="badge badge-success margin-half">3</span>
                    <?php endif; ?>

                    <?php if (Auth::check() && Auth::user()->level() >= 2): ?>
                        <span class="badge badge-dark margin-half text-white">2</span>
                    <?php endif; ?>

                    <?php if (Auth::check() && Auth::user()->level() >= 1): ?>
                        <span class="badge badge-default margin-half text-white">1</span>
                    <?php endif; ?>
                </p>

                <p>
                    <?php echo trans('admin.dashboard.permissions-string'); ?>


                    <?php if (Auth::check() && Auth::user()->hasPermission('view.users')): ?>
                        <span class="badge badge-primary margin-half margin-left-0">
                            <?php echo trans('admin.access_levels.permissions.view-users'); ?>

                        </span>
                    <?php endif; ?>
                    <?php if (Auth::check() && Auth::user()->hasPermission('create.users')): ?>
                        <span class="badge badge-info margin-half margin-left-0">
                            <?php echo trans('admin.access_levels.permissions.create-users'); ?>

                        </span>
                    <?php endif; ?>
                    <?php if (Auth::check() && Auth::user()->hasPermission('edit.users')): ?>
                        <span class="badge badge-warning text-white margin-half margin-left-0">
                            <?php echo trans('admin.access_levels.permissions.edit-users'); ?>

                        </span>
                    <?php endif; ?>
                    <?php if (Auth::check() && Auth::user()->hasPermission('delete.users')): ?>
                        <span class="badge badge-danger margin-half margin-left-0">
                            <?php echo trans('admin.access_levels.permissions.delete-users'); ?>

                        </span>
                    <?php endif; ?>
                    <?php if (Auth::check() && Auth::user()->hasPermission('perms.super.admin')): ?>
                        <span class="badge badge-success margin-half margin-left-0">
                            <?php echo trans('admin.access_levels.roles.super-admin'); ?>

                        </span>
                    <?php endif; ?>
                    <?php if (Auth::check() && Auth::user()->hasPermission('perms.admin')): ?>
                        <span class="badge badge-dark margin-half margin-left-0">
                            <?php echo trans('admin.access_levels.roles.admin'); ?>

                        </span>
                    <?php endif; ?>
                    <?php if (Auth::check() && Auth::user()->hasPermission('perms.moderator')): ?>
                        <span class="badge badge-secondary margin-half margin-left-0">
                            <?php echo trans('admin.access_levels.roles.moderator'); ?>

                        </span>
                    <?php endif; ?>
                    <?php if (Auth::check() && Auth::user()->hasPermission('perms.writer')): ?>
                        <span class="badge badge-danger margin-half margin-left-0">
                            <?php echo trans('admin.access_levels.roles.writer'); ?>

                        </span>
                    <?php endif; ?>
                    <?php if (Auth::check() && Auth::user()->hasPermission('perms.user')): ?>
                        <span class="badge badge-info margin-half margin-left-0">
                            <?php echo trans('admin.access_levels.roles.user'); ?>

                        </span>
                    <?php endif; ?>
                </p>

            </div>
            <hr>
            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sbs/resources/views/admin/pages/home.blade.php ENDPATH**/ ?>