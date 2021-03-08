<ul class="list-inline text-center">

    <?php if(Route::has('feeds.blog')): ?>
        <li class="list-inline-item">
            <a href="<?php echo e(route('feeds.blog')); ?>" data-toggle="tooltip" title="RSS feed">
                <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fa fa-rss fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </li>
    <?php endif; ?>

    <?php if(config('blog.sm.twitter_url')): ?>
        <li class="list-inline-item">
            <a href="<?php echo e(config('blog.sm.twitter_url')); ?>" target="_blank" data-toggle="tooltip" title="Twitter">
                <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </li>
    <?php endif; ?>

    <?php if(config('blog.sm.facebook_url')): ?>
        <li class="list-inline-item">
            <a href="<?php echo e(config('blog.sm.facebook_url')); ?>" target="_blank" data-toggle="tooltip" title="Facebook">
                <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </li>
    <?php endif; ?>

    <?php if(config('blog.sm.linkedin_url')): ?>
        <li class="list-inline-item">
            <a href="<?php echo e(config('blog.sm.linkedin_url')); ?>" target="_blank" data-toggle="tooltip" title="LinkedIn">
                <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fa fa-linkedin  fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </li>
    <?php endif; ?>

    <?php if(config('blog.sm.googleplus_url')): ?>
        <li class="list-inline-item">
            <a href="<?php echo e(config('blog.sm.googleplus_url')); ?>" target="_blank" data-toggle="tooltip" title="Google+">
                <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fa fa-google-plus  fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </li>
    <?php endif; ?>

    <?php if(config('blog.sm.github_url')): ?>
        <li class="list-inline-item">
            <a href="<?php echo e(config('blog.sm.github_url')); ?>" target="_blank" data-toggle="tooltip" title="GitHub">
                <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </li>
    <?php endif; ?>

</ul>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/blog/partials/social-media.blade.php ENDPATH**/ ?>