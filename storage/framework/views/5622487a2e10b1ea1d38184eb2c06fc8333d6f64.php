<?php $__env->startSection('template_title'); ?><?php echo e($post->title); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('template_description'); ?><?php echo e($post->meta_description); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('template_author'); ?><?php echo e($post->author); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('blog.partials.header-post', ['image' => $post->post_image, 'title' => $post->title, 'subtitle'  => $post->subtitle, 'meta' => trans('larablog.blogroll.postedBy', ['author' => $post->author, 'url' => url('/author/' . $post->author), 'date' => $post->published_at]) ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto mb-4">
                    <?php echo $post->content_html; ?>

                </div>
            </div>
        </div>
    </article>

    <?php if(config('blog.services.disqusKey')): ?>
        <?php echo $__env->make('blog.partials.disqus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php if(config('blog.services.disqusKey')): ?>
        <?php echo $__env->make('blog.partials.disqusjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/blog/post-layouts/standard.blade.php ENDPATH**/ ?>