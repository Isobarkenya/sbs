<?php $__env->startSection('template_title'); ?><?php echo e($pageTitle); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('template_description'); ?><?php echo e($pageDesc); ?><?php $__env->stopSection(); ?>

<?php $__env->startPush('head'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('blog.partials.header', ['image' => $image, 'title' => $title, 'subtitle'  => $subtitle], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2">
                <?php echo $__env->make('blog.forms.contact-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/blog/pages/contact.blade.php ENDPATH**/ ?>