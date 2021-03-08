<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php $__currentLoopData = $blogposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="post-preview">
                    <a href="<?php echo e($post->url($tag)); ?>">
                        <h2 class="post-title">
                            <?php echo $post->title; ?>

                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo $post->subtitle; ?>

                        </h3>
                    </a>
                    <p class="post-meta">
                        <?php echo trans('larablog.blogroll.postedBy', ['url' => url('/author/' . $post->author), 'author' => $post->author, 'date' => $post->published_at->format('F j, Y')]); ?>

                    </p>
                    <?php if($post->tags->count()): ?>
                        <div class="tags-area">
                            <small class="text-muted">
                                <?php echo trans('larablog.blogroll.tags'); ?>

                            </small>
                            <span class="badge badge-light badge-pill">
                                <?php echo join('</span> <span class="badge badge-light badge-pill">', $post->tagLinks()); ?>

                            </span>
                        </div>
                    <?php endif; ?>
                </div>
                <hr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/sbs/resources/views/blog/partials/posts-roll.blade.php ENDPATH**/ ?>