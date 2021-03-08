<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('admin.tags.pages.create.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_description'); ?>
    <?php echo e(trans('admin.tags.pages.create.desc')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_title'); ?>
    <?php echo e(trans('admin.tags.pages.create.header')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('head'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                <h5 class="card-title">
                    <?php echo trans('forms.create-tag.title'); ?>

                </h5>
            </div>
            <hr>
            <?php echo $__env->make('admin.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo Form::open(['method' => 'POST', 'route' => 'storedivision',  'class' => 'create-tag-form', 'id' => 'create_tag_form', 'role' => 'form', 'enctype' => 'multipart/form-data' ]); ?>

                <div class="card-body">
                    <input type="hidden" name="_method" value="POST">
                    <?php echo $__env->make('admin.division.partials.division-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <hr>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-12 offset-sm-12 mb-3">
                            <button type="submit" class="btn btn-success btn-md btn-block mt-0">
                               Create Division
                            </button>
                        </div>
                    </div>
                </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<script type="text/javascript">
    $(function() {
        // Image Uploader
        $('#post_image_trigger').filemanager('image');
    });
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/division/create.blade.php ENDPATH**/ ?>