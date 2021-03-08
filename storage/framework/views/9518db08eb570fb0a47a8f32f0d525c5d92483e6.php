<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('admin.skills.pages.index.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_description'); ?>
    <?php echo e(trans('admin.skills.pages.index.desc')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_title'); ?>
    <?php echo e(trans('admin.skills.pages.index.header')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('head'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="<?php echo e(route('createskill')); ?>" class="btn btn-sm pull-right" data-toggle="tooltip" data-placement="left" title="<?php echo trans('tooltips.skill.create'); ?>">
                        <i class="nc-icon nc-simple-add" aria-hidden="true"></i>
                        <span class="hidden-xs">
                           Create Skill
                        </span>
                    </a>
                    <h4 class="card-title">
                        Skills
                    </h4>
                    <span class="badge badge-pill badge-primary pull-left">

                    </span>
                </div>

                <hr>
                <?php echo $__env->make('admin.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.partials.loading-spinner-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card-body" id="skills_table_card" style="display: none;">
                    <div class="table-responsive">
                        <table id="skills_table" class="table table-sm">
                            <thead class="text-primary">
                                <th>
                                   id
                                </th>
                                <th>
                                   name
                                </th>
                                <th>
                                    slug
                                </th>


                                <th data-sortable="false" class="no-search no-sort">
                                    Actions
                                </th>
                                <th data-sortable="false" class="no-sort no-search"></th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="data-style">
                                            <?php echo e($skill->id); ?>

                                        </td>

                                        <td>
                                            <?php echo e($skill->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($skill->slug); ?>

                                        </td>

                                        <td>
                                            <a href="/admin/skills/<?php echo e($skill->id); ?>/edit" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="left" title="<?php echo trans('tooltips.skill.edit'); ?>">
                                                <i class="fa fa-edit fa-fw" aria-hidden="true"></i>
                                              Edit
                                            </a>
                                        </td>
                                        <td>
                                            <span data-toggle="tooltip" data-placement="top" title="Delete Skill">
                                                <button type="button" class="btn btn-danger btn-sm btn-block delete-skill-trigger" data-toggle="modal" data-target="#modal_delete_skill" data-skillid="<?php echo e($skill->id); ?>">
                                                    <i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
                                                    <span class="hidden-xs hidden-sm hidden-md">
                                                       Delete
                                                    </span>
                                                </button>
                                            </span>
                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="clearfix mb-2"></div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('admin.modals.delete-skill-modal-form', ['skillId' => null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(function() {
            $('#skills_table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                "order": [[ 0, "desc" ]],
                'aoColumnDefs': [{
                    'bSortable': false,
                    'searchable': false,
                    'aTargets': ['no-search'],
                    'bTargets': ['no-sort']
                }]
            });

            $('.delete-skill-trigger').click(function(event) {
                var skillId = $(this).data("skillid");
                $('#modal_delete_skill').on('show.bs.modal', function (e) {
                    document.delete_skill_form.action = "<?php echo e(url('/')); ?>" + "/admin/skills/" + skillId;
                });
            });

            $('.loading').hide();
            $('#skills_table_card').fadeIn(100);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/skill/index.blade.php ENDPATH**/ ?>