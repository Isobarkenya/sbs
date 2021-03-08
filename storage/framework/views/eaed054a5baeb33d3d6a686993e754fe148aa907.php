<div class="modal fade modal-danger" id="modal_delete_skill" role="dialog" aria-labelledby="modal_delete_skill" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title">
                    <i class="fa fa-question-circle fa-fw mr-1 text-white"></i>
                    Delete Skill
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">
                        <?php echo trans('admin.modals.delete-skill.close'); ?>

                    </span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Are you sure ?
                </p>
            </div>
            <div class="modal-footer">
                <?php echo Form::open(['method' => 'DELETE', 'route' => ['destroyskill', $skillId], 'role' => 'form', 'id' => 'delete_skill_form', 'name' => 'delete_skill_form']); ?>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="_method" value="DELETE">
                    <meta name="_token" content="<?php echo csrf_token(); ?>" />
                    <?php echo Form::button('<i class="fa fa-fw fa-close" aria-hidden="true"></i> ' . trans('Cancel'), array('class' => 'btn btn-outline pull-left btn-light', 'type' => 'button', 'data-dismiss' => 'modal' )); ?>

                    <?php echo Form::button('<i class="fa fa-fw fa-trash-o" aria-hidden="true"></i> ' . trans('Delete'), array('class' => 'btn btn-danger pull-right', 'type' => 'submit', 'id' => 'confirm' )); ?>

                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/modals/delete-skill-modal-form.blade.php ENDPATH**/ ?>