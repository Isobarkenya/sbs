<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('admin.posts.pages.create.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_description'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_title'); ?>
    <?php echo e(trans('admin.posts.pages.create.header')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('head'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-post" id="post_card">
                <div class="card-header">
                    <div class="badge badge-pill badge-warning text-white pull-right">
                        <small>
                            <?php echo trans('forms.create-post.badge'); ?>

                        </small>
                    </div>
                    <h5 class="card-title">
                        <?php echo trans('forms.create-post.title'); ?>

                    </h5>
                </div>

                <hr>
                <?php echo $__env->make('admin.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.partials.loading-spinner-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo Form::open(['method' => 'POST', 'route' => 'storepost',  'class' => 'blog-post-form', 'id' => 'store_post_form', 'role' => 'form', 'enctype' => 'multipart/form-data', 'style' => 'display: none;' ]); ?>

                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="_method" value="POST">
                    <meta name="_token" content="<?php echo csrf_token(); ?>" />

                    <div class="card-body">
                        <?php echo $__env->make('admin.post.partials.post-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                    <hr>

                    <div class="card-footer">
                        <div class="row ">
                            <div class="col-md-6 mb-4">
                                <span data-toggle="tooltip" data-placement="right" title="<?php echo trans('tooltips.post.save-new-post'); ?>">
                                    <?php echo Form::button(trans('forms.edit-post.buttons.save-continue'), ['class' => 'btn btn-success btn-lg btn-block','type' => 'submit', 'name' => 'action', 'value' => 'continue']); ?>

                                </span>
                            </div>
                        </div>
                    </div>
                <?php echo Form::close(); ?>


            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make('admin.scripts.post-form-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/post/create.blade.php ENDPATH**/ ?>