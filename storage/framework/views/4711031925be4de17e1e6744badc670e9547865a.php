<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <?php if(config('blog.services.googleAnalyticsID')): ?>
            <?php echo $__env->make('blog.partials.analytics', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php if(trim($__env->yieldContent('template_title'))): ?><?php echo $__env->yieldContent('template_title'); ?> | <?php endif; ?> <?php echo e(config('app.name', trans('titles.app'))); ?></title>
        <?php if(trim($__env->yieldContent('template_description'))): ?>
            <meta name="description" content="<?php echo $__env->yieldContent('template_description'); ?>">
        <?php endif; ?>
        <meta name="author" content="<?php echo e(config('blog.author')); ?>">
        <link rel="shortcut icon" href="/favicon.ico">

        
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

        
        <link href="<?php echo e(mix('css/admin.css')); ?>" rel="stylesheet">


        
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>;
        </script>

        <?php echo $__env->yieldPushContent('head'); ?>
    </head>
    <body class="auth-page">
        <div id="app">
            <main>
                <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                <div class="content">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </main>
        </div>

        
        <script src="<?php echo e(mix('js/admin.js')); ?>" defer></script>

        <?php echo $__env->yieldPushContent('scripts'); ?>

    </body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/larablog-master/resources/views/layouts/auth.blade.php ENDPATH**/ ?>