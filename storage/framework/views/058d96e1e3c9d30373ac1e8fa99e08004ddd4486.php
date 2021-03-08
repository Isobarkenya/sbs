<div class="table-responsive themes-table">
    <table class="table table-striped table-sm data-table">
        <thead>
            <tr>
                
                <th><?php echo trans('themes.themesStatus'); ?></th>
                <th><?php echo trans('themes.themesName'); ?></th>
                <th class="hidden-xs hidden-sm hidden-md"><?php echo trans('themes.themesLink'); ?></th>
                <th><?php echo trans('themes.themesActions'); ?></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $themeStatus = [
                        'name'  => trans('themes.statusDisabled'),
                        'class' => 'danger'
                    ];
                    if($value->status == 1) {
                        $themeStatus = [
                            'name'  => trans('themes.statusEnabled'),
                            'class' => 'success'
                        ];
                    }
                ?>
                <tr>
                    
                    <td>
                        <span class="badge badge-pill badge-<?php echo e($themeStatus['class']); ?>">
                            <?php echo $themeStatus['name']; ?>

                        </span>
                    </td>
                    <td><?php echo $value->name; ?></td>
                    <td class="hidden-xs hidden-sm hidden-md">
                        <a href="<?php echo $value->link; ?>" target="_blank" data-toggle="tooltip" title="Go to Link">
                            <?php echo $value->link; ?>

                        </a>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-success btn-block" href="<?php echo e(route('showtheme', $value->id)); ?>" data-toggle="tooltip" title="<?php echo e(trans('themes.themesBtnShow')); ?>">
                            <i class="fa fa-eye fa-fw" aria-hidden="true"></i>
                            <span class="sr-only"><?php echo trans('themes.themesBtnShow'); ?></span>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-info btn-block" href="<?php echo e(route('edittheme', $value->id)); ?>" data-toggle="tooltip" title="<?php echo e(trans('themes.themesBtnEdit')); ?>">
                            <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>
                            <span class="sr-only"><?php echo trans('themes.themesBtnEdit'); ?></span>
                        </a>
                    </td>
                    <td>
                        <?php echo Form::open(array('route' => ['destroytheme', $value->id], 'class' => 'delete-theme-form', 'data-toggle' => 'tooltip', 'title' => 'Delete Theme')); ?>

                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo Form::button('<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i> <span class="sr-only">Delete Theme</span>', array('class' => 'btn btn-danger btn-sm','type' => 'button', 'style' =>'width: 100%;' ,'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => trans('themes.confirmDeleteHdr'), 'data-message' => trans('themes.confirmDelete'))); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php echo $__env->make('admin.modals.delete-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make('admin.scripts.delete-modal-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/html/sbs/resources/views/admin/themesmanagement/partials/theme-table-list.blade.php ENDPATH**/ ?>