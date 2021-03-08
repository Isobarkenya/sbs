<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('admin.dashboarddata.pages.index.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_description'); ?>
    <?php echo e(trans('admin.dashboarddata.pages.index.desc')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_title'); ?>
    <?php echo e(trans('admin.dashboarddata.pages.index.header')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('head'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   
                    <h4 class="card-title">
                       Dashboard Data
                    </h4>
                    <span class="badge badge-pill badge-primary pull-left">

                    </span>
                </div>

                <hr>
                <?php echo $__env->make('admin.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.partials.loading-spinner-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card-body" id="dashboarddata_table_card" style="display: none;">
                    <div class="table-responsive">
                        <table id="dashboarddata_table" class="table table-sm">
                            <thead class="text-primary">
                                <th>
                                 Id
                                </th>
                                <th>
                                BUSINESS DEVELOPMENT DIVISION
                                </th>
                                <th>
                                CEO OFFICE
                                </th>
                                <th>
                                COMMERCIAL DIVISION
                                </th>
                                <th>
                                CORPORATE AFFAIRS DIVISION
                                </th>
                                <th>
                                CORPORATE SECURITY DIVISION
                                </th>
                                <th>
                                ENTERPRISE BUSINESS UNIT DIVISION
                                </th>
                                <th>
                                FINANCE DIVISION
                                </th>
                                <th>
                                FINANCIAL SERVICES DIVISION
                                </th>
                                <th>
                                RESOURCE DIVISION
                                </th>
                                <th>
                                TECHNOLOGY DIVISION
                                </th>
                                <th>
                                VGE AFRICA
                                </th>
                                <th>
                                 Action
                                </th>

                                <th data-sortable="false" class="no-sort no-search"></th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $dashboarddata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dashboarddata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="data-style">
                                            <?php echo e($dashboarddata->id); ?>

                                        </td>
                                        <td>
                                            <?php echo e($dashboarddata->Business_Development_Division); ?>

                                        </td>
                                        <td class="hidden-sm">
                                        <?php echo e($dashboarddata->CEO_Office); ?>

                                        </td>
                                        <td class="hidden-sm">
                                        <?php echo e($dashboarddata->Commercial_Division); ?>

                                        </td>
                                        <td class="hidden-sm">
                                        <?php echo e($dashboarddata->Corporate_Affairs_Division); ?>

                                        </td>
                                        <td class="hidden-sm">
                                        <?php echo e($dashboarddata->Corporate_Security_Division); ?>

                                        </td>
                                        <td class="hidden-sm">
                                        <?php echo e($dashboarddata->EBUD); ?>

                                        </td>
                                        <td class="hidden-sm">
                                        <?php echo e($dashboarddata->Finance_Division); ?>

                                        </td>
                                        <td class="hidden-sm">
                                        <?php echo e($dashboarddata->Financial_Services_Division); ?>

                                        </td>
                                        <td class="hidden-sm">
                                        <?php echo e($dashboarddata->Resource_Division); ?>

                                        </td>
                                        <td class="hidden-sm">
                                        <?php echo e($dashboarddata->Technology_Division); ?>

                                        </td>
                                        <td class="hidden-sm">
                                        <?php echo e($dashboarddata->VGE_Division); ?>

                                        </td>
                                        <td>
                                            <a href="/sbs/admin/dashboarddata/<?php echo e($dashboarddata->id); ?>/edit" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="left" title="<?php echo trans('tooltips.band.edit'); ?>">
                                                <i class="fa fa-edit fa-fw" aria-hidden="true"></i>
                                               edit dashboard
                                            </a>
                                        </td>
                                        <td>
                                            <span data-toggle="tooltip" data-placement="top" title="<?php echo trans('tooltips.band.delete'); ?>">
                                                <button type="button" class="btn btn-danger btn-sm btn-block delete-band-trigger" data-toggle="modal" data-target="#modal_delete_band" data-bandid="<?php echo e($dashboarddata->id); ?>">
                                                    <i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
                                                    <span class="hidden-xs hidden-sm hidden-md">
                                                     Delete dashboard
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



<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(function() {
            $('#dashboarddata_table').DataTable({
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

            $('.delete-band-trigger').click(function(event) {
                var bandId = $(this).data("bandid");
                $('#modal_delete_band').on('show.bs.modal', function (e) {
                    document.delete_band_form.action = "<?php echo e(url('/')); ?>" + "/admin/dashboarddata/" + bandId;
                });
            });

            $('.loading').hide();
            $('#dashboarddata_table_card').fadeIn(100);
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sbs/resources/views/admin/dashboarddata/index.blade.php ENDPATH**/ ?>