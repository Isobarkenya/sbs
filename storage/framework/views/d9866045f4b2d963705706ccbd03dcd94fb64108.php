<?php $__env->startSection('template_title'); ?>
    <?php echo e(trans('admin.posts.pages.index.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_description'); ?>
    <?php echo e(trans('admin.posts.pages.index.desc')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header_title'); ?>
    <?php echo e(trans('admin.posts.pages.index.header')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-sm pull-right" data-toggle="tooltip" data-placement="left" title="<?php echo trans('tooltips.post.create'); ?>">
                        <i class="nc-icon nc-simple-add" aria-hidden="true"></i>
                        <span class="hidden-xs">
                            <?php echo e(trans('admin.buttons.create')); ?>

                        </span>
                    </a>
                    <h4 class="card-title">
                        <?php echo e(trans('admin.posts.table.title')); ?>

                    </h4>
                    <span class="badge badge-pill badge-primary">
                        <?php echo trans('admin.posts.pages.index.badge', ['per' => $posts->perPage(), 'total' => $posts->total()]); ?>

                    </span>
                </div>

                <hr>
                <?php echo $__env->make('admin.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="posts-table" class="table table-sm">
                            <thead class="text-primary">
                                <th>
                                    <?php echo e(trans('admin.posts.table.titles.id')); ?>

                                </th>
                                <th>
                                    <?php echo e(trans('admin.posts.table.titles.published')); ?>

                                </th>
                                <th>
                                    <?php echo e(trans('admin.posts.table.titles.title')); ?>

                                </th>
                                
                                <th>
                                    <?php echo e(trans('admin.posts.table.titles.author')); ?>

                                </th>
                                <th>
                                    <?php echo e(trans('admin.posts.table.titles.image')); ?>

                                </th>
                                <th>
                                    <?php echo e(trans('admin.posts.table.titles.tags')); ?>

                                </th>
                                <th data-sortable="false">
                                    <?php echo e(trans('admin.posts.table.titles.actions')); ?>

                                </th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($post->id); ?>

                                        </td>
                                        <td data-order="<?php echo e($post->published_at->timestamp); ?>" class="data-style">
                                            <?php
                                                $status = 'Draft';
                                                $statusBadge = 'warning text-white';

                                                if(!$post->is_draft ) {
                                                    $status = 'Published';
                                                    $statusBadge = 'success';
                                                }
                                            ?>
                                            <span class="badge badge-pill badge-<?php echo e($statusBadge); ?>">
                                                <?php echo e($status); ?>

                                            </span>
                                            <br />
                                            <?php echo e($post->published_at->format('M-j-y g:ia')); ?>

                                        </td>
                                        <td>
                                            <?php echo e($post->title); ?>

                                        </td>
                                        
                                        <td>
                                            <!-- <a href="<?php echo e(url('/admin/authors/' . $post->author)); ?>" > -->
                                                <?php echo e($post->author); ?>

                                            <!-- </a> -->
                                        </td>
                                        <td class="data-style">
                                            <img src="<?php echo e($post->post_image); ?>" alt="<?php echo e($post->title); ?> Image" class="img-thumbnail" draggable="false">
                                        </td>
                                        <td>
                                            <span class="badge badge-light badge-pill">
                                                <?php echo join('</span> <span class="badge badge-light badge-pill">', $post->tagLinks()); ?>

                                            </span>
                                        </td>
                                        <td>
                                            <a href="/admin/posts/<?php echo e($post->id); ?>/edit" class="btn btn-sm btn-block btn-info" data-toggle="tooltip" data-placement="top" title="<?php echo trans('tooltips.post.edit'); ?>">
                                                <i class="fa fa-edit fa-fw"></i>
                                                <span class="hidden-xs hidden-sm hidden-md">
                                                    <?php echo e(trans('admin.buttons.edit')); ?>

                                                </span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/<?php echo e($post->slug); ?>" class="btn btn-sm btn-block btn-warning" data-toggle="tooltip" data-placement="top" title="<?php echo trans('tooltips.post.view'); ?>">
                                                <i class="fa fa-eye fa-fw"></i>
                                                <span class="hidden-xs hidden-sm hidden-md">
                                                    <?php echo e(trans('admin.buttons.view')); ?>

                                                </span>
                                            </a>
                                        </td>
                                        <td>
                                            <span data-toggle="tooltip" data-placement="top" title="<?php echo trans('tooltips.post.delete'); ?>">
                                                <button type="button" class="btn btn-danger btn-sm btn-block delete-post-trigger" data-toggle="modal" data-target="#modal_delete" data-postid="<?php echo e($post->id); ?>">
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
                    <?php echo e($posts->links()); ?>

                </div>

            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('admin.modals.delete-post-modal-form', ['postId' => null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $('.delete-post-trigger').click(function(event) {
            var postId = $(this).data("postid");
            $('#modal_delete').on('show.bs.modal', function (e) {
                document.delete_post_form.action = "<?php echo e(url('/')); ?>" + "/admin/posts/" + postId;
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/admin/post/index.blade.php ENDPATH**/ ?>