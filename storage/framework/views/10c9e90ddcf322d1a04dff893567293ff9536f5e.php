<?php $__env->startSection('template_title'); ?><?php echo e(trans('larablog.home.title')); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('template_description'); ?><?php echo e(trans('larablog.home.description')); ?><?php $__env->stopSection(); ?>

<?php $__env->startPush('head'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('blog.partials.header', ['image' => $post_image, 'title' => $title, 'subtitle'  => $subtitle ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('blog.partials.skills', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('blog.forms.contact-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('blog.partials.courses', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('blog.partials.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- <?php echo $__env->make('blog.partials.posts-roll', ['blogposts' => $posts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/blog/roll-layouts/home.blade.php ENDPATH**/ ?>