<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('admin.tags.pages.update.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_description'); ?>
    <?php echo e(trans('admin.tags.pages.update.desc')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_title'); ?>
    <?php echo e(trans('admin.tags.pages.update.header')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('head'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                <h5 class="card-title">
                   Updating skill
                </h5>
            </div>
            <hr>
            <?php echo $__env->make('admin.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo Form::open(['method' => 'Post', 'route' => ['updateskill'],  'class' => 'update-tag-form', 'id' => 'update_tag_form', 'role' => 'form', 'enctype' => 'multipart/form-data' ]); ?>

                <div class="card-body">
                    <input type="hidden" name="_method" value="post">
                    <input type="hidden" name="id" value="<?php echo e($skill->id); ?>">
                    <?php echo $__env->make('admin.skill.partials.skill-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <hr>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-6 offset-sm-6 mb-3">
                            <button type="submit" class="btn btn-success btn-md btn-block mt-0">
                                Update Skill
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/skill/edit.blade.php ENDPATH**/ ?>