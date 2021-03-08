<?php echo Form::open(['method' => 'PATCH', 'route' => 'update-blog-theme',  'class' => '', 'id' => 'update_theme_form', 'role' => 'form', 'enctype' => 'multipart/form-data' ]); ?>

    <?php echo e(csrf_field()); ?>

    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <input type="hidden" name="_method" value="POST">
    <meta name="_token" content="<?php echo csrf_token(); ?>" />
    <div class="form-group has-feedback row <?php echo e($errors->has('currentTheme') ? ' has-error ' : ''); ?>">
        <?php echo Form::label('currentTheme', trans('themes.default.label'), ['class' => 'col-12 control-label']);; ?>

        <div class="col-12">
            <select name="currentTheme" id="currentTheme" class="form-control">
                <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php if($theme == $currentTheme): ?> selected <?php endif; ?> value="<?php echo e($theme->id); ?>">
                        <?php echo e($theme->name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <?php if($errors->has('currentTheme')): ?>
            <div class="row">
                <div class="col-12">
                    <span class="help-block">
                        <strong><?php echo e($errors->first('currentTheme')); ?></strong>
                    </span>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php echo Form::close(); ?>


<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        document.getElementById('currentTheme').onchange = function(){
            var elem = (typeof this.selectedIndex === "undefined" ? window.event.srcElement : this);
            var value = elem.value || elem.options[elem.selectedIndex].value;
            processThemeChange(value);
        };
        function processThemeChange(themeId) {
            var notificaton = $.notify({
                icon: "nc-icon nc-refresh-69 spin",
                message: "<?php echo trans('themes.theme_updating'); ?>"
            }, {
                allow_dismiss: false,
                type: 'primary',
                timer: 4000,
                placement: {
                    from: 'top',
                    align: 'center'
                },
                showProgressbar: true
            });
            notificaton.update('progress', 50);
            $.ajax({
                type:'POST',
                url: "<?php echo e(route('update-blog-theme')); ?>",
                data: $('#update_theme_form').serialize(),
                success: function (response) {
                    notificaton.update({
                        'icon': "nc-icon nc-check-2",
                        'type': 'success',
                        'message': response.message,
                        'progress': 100,
                    });
                },
                error: function (response, status, error) {
                    notificaton.update({
                        'icon': "nc-icon nc-simple-remove",
                        'type': 'danger',
                        'message': error,
                        'progress': 100,
                    });
                },
            });
        }
    });
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/html/sbs/resources/views/admin/themesmanagement/partials/default-theme-form.blade.php ENDPATH**/ ?>