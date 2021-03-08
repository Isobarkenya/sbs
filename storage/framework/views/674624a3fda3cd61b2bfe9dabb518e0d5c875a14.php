<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('admin.tags.pages.index.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_description'); ?>
    <?php echo e(trans('admin.tags.pages.index.desc')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_title'); ?>
    <?php echo e(trans('admin.tags.pages.index.header')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('head'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="<?php echo e(route('createtag')); ?>" class="btn btn-sm pull-right" data-toggle="tooltip" data-placement="left" title="<?php echo trans('tooltips.tag.create'); ?>">
                        <i class="nc-icon nc-simple-add" aria-hidden="true"></i>
                        <span class="hidden-xs">
                            <?php echo e(trans('admin.buttons.create-tag')); ?>

                        </span>
                    </a>
                    <h4 class="card-title">
                        <?php echo e(trans('admin.tags.table.title')); ?>

                    </h4>
                    <span class="badge badge-pill badge-primary pull-left">
                        <?php echo trans('admin.tags.pages.index.badge', ['per' => '', 'total' => $tags->count()]); ?>

                    </span>
                </div>

                <hr>
                <?php echo $__env->make('admin.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.partials.loading-spinner-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card-body" id="tags_table_card" style="display: none;">
                    <div class="table-responsive">
                        <table id="tags_table" class="table table-sm">
                            <thead class="text-primary">
                                <th>
                                    <?php echo e(trans('admin.tags.table.titles.id')); ?>

                                </th>
                                <th>
                                    <?php echo e(trans('admin.tags.table.titles.tag')); ?>

                                </th>
                                <th>
                                    <?php echo e(trans('admin.tags.table.titles.title')); ?>

                                </th>
                                <th class="hidden-sm">
                                    <?php echo e(trans('admin.tags.table.titles.subtitle')); ?>

                                </th>
                                <th class="hidden-md">
                                    <?php echo e(trans('admin.tags.table.titles.post_image')); ?>

                                </th>
                                <th>
                                    <?php echo e(trans('admin.tags.table.titles.used')); ?>

                                </th>
                                <th class="hidden-md">
                                    <?php echo e(trans('admin.tags.table.titles.layout')); ?>

                                </th>
                                <th class="hidden-md">
                                    <?php echo e(trans('admin.tags.table.titles.meta_description')); ?>

                                </th>
                                <th class="hidden-sm">
                                    <?php echo e(trans('admin.tags.table.titles.direction')); ?>

                                </th>
                                <th data-sortable="false" class="no-search no-sort">
                                    <?php echo e(trans('admin.tags.table.titles.actions')); ?>

                                </th>
                                <th data-sortable="false" class="no-sort no-search"></th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="data-style">
                                            <?php echo e($tag->id); ?>

                                        </td>
                                        <td>
                                            <span class="badge badge-light badge-pill">
                                                <?php echo $tag->link(); ?>

                                            </span>
                                        </td>
                                        <td>
                                            <?php echo e($tag->title); ?>

                                        </td>
                                        <td class="hidden-sm">
                                            <?php echo e($tag->subtitle); ?>

                                        </td>
                                        <td class="hidden-md data-style">
                                            <img src="<?php echo e($tag->post_image); ?>" alt="<?php echo e($tag->title); ?> Image" class="img-thumbnail" draggable="false">
                                        </td>
                                        <td>
                                            <span class="badge badge-secondary badge-pill data-style">
                                                <?php echo e($tag->posts()->count()); ?>

                                            </span>
                                        </td>
                                        <td class="hidden-md data-style">
                                            <span class="badge badge-light">
                                                <?php echo e($tag->layout); ?>

                                            </span>
                                        </td>
                                        <td class="hidden-md">
                                            <?php echo e($tag->meta_description); ?>

                                        </td>
                                        <td class="hidden-sm data-style">
                                            <?php if($tag->reverse_direction): ?>
                                                <span class="badge badge-pill badge-info">
                                                    <?php echo e(trans('admin.tags.table.titles.directions.reverse')); ?>

                                                </span>
                                            <?php else: ?>
                                                <span class="badge badge-pill badge-primary">
                                                    <?php echo e(trans('admin.tags.table.titles.directions.normal')); ?>

                                                </span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="/admin/tags/<?php echo e($tag->id); ?>/edit" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="left" title="<?php echo trans('tooltips.tag.edit'); ?>">
                                                <i class="fa fa-edit fa-fw" aria-hidden="true"></i>
                                                <?php echo trans('admin.buttons.edit-tag'); ?>

                                            </a>
                                        </td>
                                        <td>
                                            <span data-toggle="tooltip" data-placement="top" title="<?php echo trans('tooltips.tag.delete'); ?>">
                                                <button type="button" class="btn btn-danger btn-sm btn-block delete-tag-trigger" data-toggle="modal" data-target="#modal_delete_tag" data-tagid="<?php echo e($tag->id); ?>">
                                                    <i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
                                                    <span class="hidden-xs hidden-sm hidden-md">
                                                        <?php echo e(trans('admin.buttons.delete')); ?>

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

<?php echo $__env->make('admin.modals.delete-tag-modal-form', ['tagId' => null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(function() {
            $('#tags_table').DataTable({
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

            $('.delete-tag-trigger').click(function(event) {
                var tagId = $(this).data("tagid");
                $('#modal_delete_tag').on('show.bs.modal', function (e) {
                    document.delete_tag_form.action = "<?php echo e(url('/')); ?>" + "/admin/tags/" + tagId;
                });
            });

            $('.loading').hide();
            $('#tags_table_card').fadeIn(100);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/tag/index.blade.php ENDPATH**/ ?>