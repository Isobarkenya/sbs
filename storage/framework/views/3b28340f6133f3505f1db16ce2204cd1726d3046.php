<div class="modal fade modal-danger" id="modal_delete_division" role="dialog" aria-labelledby="modal_delete_division" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">
                    <i class="fa fa-question-circle fa-fw mr-1 text-white"></i>
                       Delete Division
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">
                        Close
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php echo trans('admin.modals.delete-division.message'); ?>

                </p>
            </div>
            <div class="modal-footer">
                <?php echo Form::open(['method' => 'DELETE', 'route' => ['destroydivision', $divisionId], 'role' => 'form', 'id' => 'delete_division_form', 'name' => 'delete_division_form']); ?>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="_method" value="DELETE">
                    <meta name="_token" content="<?php echo csrf_token(); ?>" />
                    <?php echo Form::button('<i class="fa fa-fw fa-close" aria-hidden="true"></i> ' . trans('admin.modals.delete-division.cancel'), array('class' => 'btn btn-outline pull-left btn-light', 'type' => 'button', 'data-dismiss' => 'modal' )); ?>

                    <?php echo Form::button('<i class="fa fa-fw fa-trash-o" aria-hidden="true"></i> ' . trans('admin.modals.delete-division.confirm'), array('class' => 'btn btn-danger pull-right', 'type' => 'submit', 'id' => 'confirm' )); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/modals/delete-division-modal-form.blade.php ENDPATH**/ ?>