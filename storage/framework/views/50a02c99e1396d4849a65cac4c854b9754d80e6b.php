<div class="clearfix"></div>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto mt-4 mb-4">
            <div class="row">
                <?php if($reverse_direction): ?>
                    <div class="col-12 col-sm-5 col-md-4">
                        <?php if($posts->hasMorePages()): ?>
                            <a class="btn btn-primary btn-block" href="<?php echo $posts->nextPageUrl(); ?>">
                                <i class="fa fa-long-arrow-left fa-lg"></i>
                                <?php echo trans('larablog.pagination.nextPost'); ?>

                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-sm-2 col-md-4">
                        <div class="text-center block mt-2 mb-2">
                            <?php if($posts->count() > 0): ?>
                                <?php echo e($posts->currentPage()); ?> of <a href="<?php echo e($posts->url($posts->lastItem())); ?>"><?php echo e($posts->count()); ?></a>
                            <?php else: ?>
                                <?php echo trans('larablog.pagination.noposts'); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-md-4">
                        <?php if($posts->currentPage() > 1): ?>
                            <a class="btn btn-primary btn-block" href="<?php echo $posts->url($posts->currentPage() - 1); ?>">
                                <?php echo trans('larablog.pagination.prevPost'); ?>

                                <i class="fa fa-long-arrow-right fa-lg"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <div class="col-12 col-sm-5 col-md-4">
                        <?php if($posts->currentPage() > 1): ?>
                            <a class="btn btn-primary btn-block" href="<?php echo $posts->url($posts->currentPage() - 1); ?>">
                                <i class="fa fa-long-arrow-left fa-lg"></i>
                                <?php echo trans('larablog.pagination.prevPost'); ?>

                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-sm-2 col-md-4">
                        <div class="text-center block mt-2 mb-2">
                            <?php if($posts->count() > 0): ?>
                                <?php echo e($posts->currentPage()); ?> of <a href="<?php echo e($posts->url($posts->lastItem())); ?>"><?php echo e($posts->count()); ?></a>
                            <?php else: ?>
                                <?php echo trans('larablog.pagination.noposts'); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-md-4">
                        <?php if($posts->hasMorePages()): ?>
                            <a class="btn btn-primary btn-block" href="<?php echo $posts->nextPageUrl(); ?>">
                                <?php echo trans('larablog.pagination.nextPost'); ?>

                                <i class="fa fa-long-arrow-right fa-lg"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/blog/partials/posts-pager.blade.php ENDPATH**/ ?>