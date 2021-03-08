<?php echo csrf_field(); ?>

<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<meta name="_token" content="<?php echo csrf_token(); ?>" />

<div class="row">
    <div class="col-md-8">
        <div class="form-group has-feedback row <?php echo e($errors->has('tag') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('Band', trans('Band'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::text('name', $tag, [
                    'id' => 'band_name',
                    'class' => 'form-control',
                    'placeholder' => trans('Band Name')
                ]); ?>

            </div>
            <?php if($errors->has('band_name')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('band_name')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('title') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('slug', trans('Slug'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::text('slug', $title, [
                    'id' => 'slug',
                    'class' => 'form-control',
                    'placeholder' => trans('slung')
                ]); ?>

            </div>
            <?php if($errors->has('slug')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('slug')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('title') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('Status', trans('Status'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">

                <select name="active" id="active" class="form-control">
                <option value="">Select Band</option>
                 <option value="0">No</option>
                 <option value="1">Yes</option>
                </select>
            </div>
        </div>


    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/band/partials/band-form.blade.php ENDPATH**/ ?>