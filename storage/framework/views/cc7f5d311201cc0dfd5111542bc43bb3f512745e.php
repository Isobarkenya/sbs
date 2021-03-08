<?php $__env->startSection('template_title'); ?>
    <?php echo trans('themes.titles.index'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_title'); ?>
    <?php echo trans('themes.header.index'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_linked_css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <?php echo $__env->make('admin.themesmanagement.partials.default-theme-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <hr>
        <div class="container">
            <?php echo $__env->make('admin.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-9">
                    <p class="float-left mt-2">
                        <?php echo trans('themes.themesTitle'); ?> <strong><?php echo e(count($themes)); ?></strong> <?php echo trans('themes.themes'); ?>

                    </p>
                </div>
                <div class="col-3">
                    <a href="<?php echo e(route('createtheme')); ?>" class="btn btn-outline-primary btn-sm pull-right mb-2 mr-3">
                        <i class="fa fa-fw fa-plus" aria-hidden="true"></i>
                        <span class="hidden-xs hidden-sm">
                            <?php echo trans('themes.btnAddTheme'); ?>

                        </span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php echo $__env->make('admin.themesmanagement.partials.theme-table-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sbs/resources/views/admin/themesmanagement/index.blade.php ENDPATH**/ ?>