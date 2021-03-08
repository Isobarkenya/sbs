<?php echo csrf_field(); ?>

<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<meta name="_token" content="<?php echo csrf_token(); ?>" />

<div class="row">
    <div class="col-md-8">
        <div class="form-group has-feedback row <?php echo e($errors->has('fied1') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('BUSINESS DEVELOPMENT DIVISION', trans('BUSINESS DEVELOPMENT DIVISION'), ['class' => 'col-12 control-label']);; ?>

            <input type="hidden" name="id" value="<?php echo e($dashboarddata->id); ?>">
            <div class="col-12">
                <?php echo Form::number('fied1', $dashboarddata->fied1, [
                    'id' => 'fied1',
                    'class' => 'form-control',
                    'placeholder' => trans('BUSINESS DEVELOPMENT DIVISION')
                ]); ?>

            </div>
            <?php if($errors->has('band_name')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('fied1')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('fied1') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('BUSINESS DEVELOPMENT DIVISION', trans('BUSINESS DEVELOPMENT DIVISION'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::number('fied2', $dashboarddata->fied2, [
                    'id' => 'fied2',
                    'class' => 'form-control',
                    'placeholder' => trans('BUSINESS DEVELOPMENT DIVISION')
                ]); ?>

            </div>
            <?php if($errors->has('band_name')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('fied2')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <div class="form-group has-feedback row <?php echo e($errors->has('fied1') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('BUSINESS DEVELOPMENT DIVISION', trans('BUSINESS DEVELOPMENT DIVISION'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::number('fied3', $dashboarddata->fied3, [
                    'id' => 'fied3',
                    'class' => 'form-control',
                    'placeholder' => trans('BUSINESS DEVELOPMENT DIVISION')
                ]); ?>

            </div>
            <?php if($errors->has('band_name')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('fied3')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>
        <div class="form-group has-feedback row <?php echo e($errors->has('fied1') ? ' has-error ' : ''); ?>">
            <?php echo Form::label('BUSINESS DEVELOPMENT DIVISION', trans('BUSINESS DEVELOPMENT DIVISION'), ['class' => 'col-12 control-label']);; ?>

            <div class="col-12">
                <?php echo Form::number('fied5', $dashboarddata->fied5, [
                    'id' => 'fied5',
                    'class' => 'form-control',
                    'placeholder' => trans('BUSINESS DEVELOPMENT DIVISION')
                ]); ?>

            </div>
            <?php if($errors->has('band_name')): ?>
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('fied3')); ?></strong>
                    </span>
                </div>
            <?php endif; ?>
        </div>


    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/dashboarddata/partials/dashboarddata-form.blade.php ENDPATH**/ ?>