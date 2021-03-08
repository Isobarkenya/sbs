<div class="row">
    <div class="col-md-8">

        <div class="form-group has-feedback row <?php echo e($errors->has('title') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('title', trans('forms.edit-post.labels.post-title'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::text('title', $title, array('id' => 'title', 'class' => 'form-control', 'placeholder' => trans('forms.edit-post.labels.post-title'))); ?>

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
            <?php echo Form::label('subtitle', trans('forms.edit-post.labels.post-subtitle'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::text('subtitle', $subtitle, array('id' => 'subtitle', 'class' => 'form-control', 'placeholder' => trans('forms.edit-post.labels.post-subtitle'))); ?>

            </div>
            <?php if($errors->has('subtitle')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('subtitle')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('slug') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('slug', trans('forms.edit-post.labels.post-slug'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::text('slug', $slug, array('id' => 'slug', 'class' => 'form-control', 'placeholder' => trans('forms.edit-post.labels.post-slug'))); ?>

            </div>
            <?php if($errors->has('slug')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('slug')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('post_image') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('post_image', trans('forms.edit-post.labels.post-post_image'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <div class="row">
                    <div class="col-md-9 mb-4 mb-md-0">
                        <div class="row">
                            <div class="col-12 mb-1">
                                <a id="post_image_trigger" data-input="post_image" data-preview="post_image_preview" class="btn btn-primary text-white btn-block">
                                    <?php echo trans('forms.edit-post.buttons.choose-image'); ?>

                                </a>
                            </div>
                            <div class="col-12 mt-2 mb-1">
                                <input type="text" id="post_image" class="form-control" name="post_image" placeholder="<?php echo e(trans('forms.edit-post.labels.post-image-url')); ?>" value="<?php echo e(post_image($post_image)); ?>">
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
                    <div class="col-12 col-md-3 pull-right mb-3 mt-md-2">
                        <img src="<?php echo e(post_image($post_image)); ?>" id="post_image_preview" class="img img_responsive" alt="Post Image Thumbnail" draggable="false">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('content') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('content', trans('forms.edit-post.labels.post-content'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::textarea('content', $content, array('id' => 'content', 'class' => 'form-control', 'placeholder' => trans('forms.edit-post.labels.post-content'))); ?>

            </div>
            <?php if($errors->has('content')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('content')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="col-12 col-md-4">

        <div class="form-group has-feedback row <?php echo e($errors->has('publish_date') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('publish_date', trans('forms.edit-post.labels.post-publish_date'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::text('publish_date', $publish_date, [
                    'id' => 'publish_date',
                    'class' => 'form-control',
                    'placeholder' => trans('forms.edit-post.labels.post-publish_date'),
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'top',
                    'title' => trans('tooltips.post.select-pub-date')
                ]); ?>

            </div>
            <?php if($errors->has('publish_date')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('publish_date')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('publish_time') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('publish_time', trans('forms.edit-post.labels.post-publish_time'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::text('publish_time', $publish_time, [
                    'id' => 'publish_time',
                    'class' => 'form-control',
                    'placeholder' => trans('forms.edit-post.labels.post-publish_time'),
                    'data-toggle' => 'tooltip',
                    'data-placement' => 'top',
                    'title' => trans('tooltips.post.select-pub-time')
                ]); ?>

            </div>
            <?php if($errors->has('publish_time')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('publish_time')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('is_draft') ? ' has-error ' : ''); ?>">
            <div class="col-md-8 col-md-offset-3">
                <div class="checkbox">
                    <input type="checkbox" name="is_draft" id="is_draft" <?php echo e(checked($is_draft)); ?>>
                    <?php echo Form::label('is_draft', trans('forms.edit-post.labels.post-is_draft'), ['class' => 'control-label']);; ?>

                </div>
            </div>
        </div>
        <div class="form-group has-feedback row <?php echo e($errors->has('category') ? ' has-error ' : ''); ?>">
        <label for="author" class="col-12 control-label">Category</label>
            <div class="col-12">
                <select name="category" id="category" class="form-control">
                    <?php $__currentLoopData = $allAvailableAuthors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availableAuthor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if($availableAuthor == $author): ?> selected <?php endif; ?> value="<?php echo e($availableAuthor); ?>">
                            <?php echo e($availableAuthor); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="form-group has-feedback row <?php echo e($errors->has('author') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('author', trans('forms.edit-post.labels.post-author'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <select name="author" id="author" class="form-control">
                    <?php $__currentLoopData = $allAvailableAuthors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availableAuthor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if($availableAuthor == $author): ?> selected <?php endif; ?> value="<?php echo e($availableAuthor); ?>">
                            <?php echo e($availableAuthor); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('tags') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('tags', trans('forms.edit-post.labels.post-tags'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <select name="tags[]" id="tags" class="form-control" multiple>
                    <?php $__currentLoopData = $allTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if(in_array($tag, $tags)): ?> selected <?php endif; ?> value="<?php echo e($tag); ?>">
                            <?php echo e($tag); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('layout') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('layout', trans('forms.edit-post.labels.post-layout'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <select name="layout" id="layout" class="form-control">
                    <?php $__currentLoopData = $postTemplates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postTemplate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if($postTemplate['path'] == $layout): ?> selected <?php endif; ?> value="<?php echo e($postTemplate['path']); ?>">
                            <?php echo e($postTemplate['name']); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('meta_description') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('meta_description', trans('forms.edit-post.labels.post-meta_description'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::textarea('meta_description', $meta_description, array('id' => 'meta_description', 'class' => 'form-control', 'placeholder' => trans('forms.edit-post.labels.post-meta_description'))); ?>

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
</div>

<?php $__env->startPush('scripts'); ?>
<?php $__env->stopPush(); ?>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/post/partials/post-form.blade.php ENDPATH**/ ?>