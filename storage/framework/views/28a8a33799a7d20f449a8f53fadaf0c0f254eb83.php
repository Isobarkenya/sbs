<?php echo csrf_field(); ?>

<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<meta name="_token" content="<?php echo csrf_token(); ?>" />

<div class="row">
    <div class="col-md-8">
        <div class="form-group has-feedback row <?php echo e($errors->has('tag') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('tag', trans('forms.create-tag.labels.tag'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::text('tag', $tag, [
                    'id' => 'tag',
                    'class' => 'form-control',
                    'placeholder' => trans('forms.create-tag.labels.tag')
                ]); ?>

            </div>
            <?php if($errors->has('tag')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('tag')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('title') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('title', trans('forms.create-tag.labels.title'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::text('title', $title, [
                    'id' => 'title',
                    'class' => 'form-control',
                    'placeholder' => trans('forms.create-tag.labels.title')
                ]); ?>

            </div>
            <?php if($errors->has('title')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('title')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('subtitle') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('subtitle', trans('forms.create-tag.labels.subtitle'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::text('subtitle', $subtitle, [
                    'id' => 'subtitle',
                    'class' => 'form-control',
                    'placeholder' => trans('forms.create-tag.labels.subtitle')
                ]); ?>

            </div>
            <?php if($errors->has('subtitle')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('subtitle')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('layout') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('layout', trans('forms.create-tag.labels.tag-layout'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <select name="layout" id="layout" class="form-control">
                    <?php $__currentLoopData = $postTemplates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postTemplate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if($postTemplate['path'] == $layout): ?> selected <?php endif; ?> value="<?php echo e($postTemplate['path']); ?>">
                            <?php echo e($postTemplate['name']); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <?php if($errors->has('layout')): ?>
                <div class="row">
                    <div class="col-12">
                        <span class="help-block">
                            <strong><?php echo e($errors->first('layout')); ?></strong>
                        </span>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('meta_description') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('meta_description', trans('forms.create-tag.labels.meta_description'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::textarea('meta_description', $meta_description, array('id' => 'meta_description', 'class' => 'form-control', 'placeholder' => trans('forms.create-tag.labels.meta_description'))); ?>

            </div>
            <?php if($errors->has('meta_description')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('meta_description')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="form-group has-feedback row <?php echo e($errors->has('post_image') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('post_image', trans('forms.create-tag.labels.tag-post_image'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <div class="row">
                    <div class="col-12 mb-1">
                        <img src="<?php echo e(post_image($post_image)); ?>" id="post_image_preview" class="img img_responsive" alt="Post Image Thumbnail" draggable="false">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-1">
                        <a id="post_image_trigger" data-input="post_image" data-preview="post_image_preview" class="btn btn-primary text-white btn-block">
                            <?php echo trans('forms.create-tag.buttons.choose-image'); ?>

                        </a>
                    </div>
                    <div class="col-12 mt-2 mb-1">
                        <input type="text" id="post_image" class="form-control" name="post_image" placeholder="<?php echo e(trans('forms.create-tag.labels.tag-image-url')); ?>" value="<?php echo e(post_image($post_image)); ?>">
                    </div>
                </div>
                <?php if($errors->has('post_image')): ?>
                    <div class="row">
                        <div class="col-12">
                            <span class="help-block">
                                <strong><?php echo e($errors->first('post_image')); ?></strong>
                            </span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('reverse_direction') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('reverse_direction', trans('forms.create-tag.labels.reverse_direction'), ['class' => 'col-12 control-label']);; ?>

            <div class="row">
                <div class="col-12 mb-1 ml-3">
                    <label class="radio-inline">
                        <?php echo Form::radio('reverse_direction', 0, !$reverse_direction); ?>

                        <?php echo trans('forms.create-tag.labels.sort-direction.normal'); ?>

                    </label>
                    <br />
                    <label class="radio-inline">
                        <?php echo Form::radio('reverse_direction', 1, $reverse_direction); ?>

                        <?php echo trans('forms.create-tag.labels.sort-direction.reversed'); ?>

                    </label>
                </div>
                <?php if($errors->has('reverse_direction')): ?>
                    <div class="row">
                        <div class="col-12 ml-3">
                            <span class="help-block">
                                <strong><?php echo e($errors->first('reverse_direction')); ?></strong>
                            </span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/tag/partials/tag-form.blade.php ENDPATH**/ ?>