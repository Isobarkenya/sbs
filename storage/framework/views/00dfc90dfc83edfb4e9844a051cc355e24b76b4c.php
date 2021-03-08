<div class="modal fade modal-success modal-save" id="confirmSave" role="dialog" aria-labelledby="confirmSaveLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <?php echo trans('laravelusers::modals.edit_user__modal_text_confirm_title'); ?>

                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    <?php echo trans('laravelusers::modals.confirm_modal_title_text'); ?>

                </p>
            </div>
            <div class="modal-footer">
                <?php echo Form::button('<i class="fa fa-fw '.trans('laravelusers::modals.confirm_modal_button_cancel_icon').'" aria-hidden="true"></i> ' . trans('laravelusers::modals.confirm_modal_button_cancel_text'), array('class' => 'btn btn-outline pull-left btn-flat', 'type' => 'button', 'data-dismiss' => 'modal' )); ?>

                <?php echo Form::button('<i class="fa fa-fw '.trans('laravelusers::modals.confirm_modal_button_save_icon').'" aria-hidden="true"></i> ' . trans('laravelusers::modals.confirm_modal_button_save_text'), array('class' => 'btn btn-success pull-right btn-flat', 'type' => 'button', 'id' => 'confirm' )); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/vendor/laravelusers/modals/modal-save.blade.php ENDPATH**/ ?>