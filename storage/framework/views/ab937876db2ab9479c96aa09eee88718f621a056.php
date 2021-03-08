<?php echo csrf_field(); ?>

<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<meta name="_token" content="<?php echo csrf_token(); ?>" />

<div class="row">
    <div class="col-md-8">
        <div class="form-group has-feedback row <?php echo e($errors->has('tag') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('Skill', trans('Skill'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::text('name', $name=$skill->name, [
                    'id' => 'skill_name',
                    'class' => 'form-control',
                    'placeholder' => trans('Skill  Name')
                ]); ?>

            </div>
            <?php if($errors->has('skill_name')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('skill_name')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('title') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('slug', trans('Slug'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::text('slug', $slug=$skill->slug, [
                    'id' => 'slug',
                    'class' => 'form-control',
                    'placeholder' => trans('slug')
                ]); ?>

            </div>
            <?php if($errors->has('slung')): ?>
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
                <option value="">Select Status</option>
                 <option value="0">No</option>
                 <option value="1">Yes</option>
                </select>
            </div>
        </div>

    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/skill/partials/skill-form.blade.php ENDPATH**/ ?>